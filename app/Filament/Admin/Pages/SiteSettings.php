<?php

namespace App\Filament\Admin\Pages;

use App\Models\Setting;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Section;
use Filament\Forms\Concerns\InteractsWithForms;

class SiteSettings extends Page implements HasForms
{
    use InteractsWithForms;


    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-cog';

    protected string $view = 'filament.admin.pages.site-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(
            Setting::pluck('value', 'key')->toArray()
        );
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Hero Section')
                    ->schema([
                        TextInput::make('hero_title')->required(),
                        TextInput::make('hero_highlight_text'),
                        Textarea::make('hero_subtitle')->rows(3),
                        TextInput::make('hero_primary_cta_text'),
                        TextInput::make('hero_secondary_cta_text'),
                    ]),

                Section::make('Trust Section')
                    ->schema([
                        TextInput::make('trust_section_title'),
                        Textarea::make('trust_section_subtitle')->rows(3),
                    ]),

                Section::make('Mission Section')
                    ->schema([
                        TextInput::make('mission_quote_title'),
                        Textarea::make('mission_description')->rows(4),
                        TextInput::make('mission_button_text'),
                    ]),
                Section::make('Trust Steps')
                    ->schema([
                        TextInput::make('trust_step_1_title'),
                        Textarea::make('trust_step_1_description'),

                        TextInput::make('trust_step_2_title'),
                        Textarea::make('trust_step_2_description'),

                        TextInput::make('trust_step_3_title'),
                        Textarea::make('trust_step_3_description'),
                    ]),
                Section::make('Transparency Section')
                    ->schema([
                        TextInput::make('transparency_title'),
                        TextInput::make('transparency_subtitle'),

                        TextInput::make('transparency_programs_label'),
                        TextInput::make('transparency_programs_percent')->numeric(),

                        TextInput::make('transparency_fundraising_label'),
                        TextInput::make('transparency_fundraising_percent')->numeric(),

                        TextInput::make('transparency_admin_label'),
                        TextInput::make('transparency_admin_percent')->numeric(),

                        Textarea::make('transparency_audit_text'),
                    ]),
                Section::make('Footer')
                    ->description('Footer content and newsletter')
                    ->schema([
                        TextInput::make('footer_registration_number')
                            ->label('Registration Number'),

                        Textarea::make('footer_description')
                            ->rows(3)
                            ->label('Footer Description'),

                        TextInput::make('footer_newsletter_text')
                            ->label('Newsletter Description'),

                        TextInput::make('footer_copyright')
                            ->label('Copyright Text'),
                    ])
                    ->columns(2),


            ])
            ->statePath('data');
    }

    public function save(): void
    {
        foreach ($this->data as $key => $value) {
            Setting::set($key, $value);
        }
        Notification::make()
            ->title('Settings saved successfully.')
            ->success()
            ->send();
    }
}
