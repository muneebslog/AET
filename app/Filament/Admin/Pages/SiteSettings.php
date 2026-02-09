<?php

namespace App\Filament\Admin\Pages;

use App\Models\Setting;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Contracts\HasForms;
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
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        foreach ($this->data as $key => $value) {
            Setting::set($key, $value);
        }

        $this->notify('success', 'Settings saved successfully.');
    }
}
