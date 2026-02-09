<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use App\Models\Subscriber;
use App\Models\ImpactStatistic;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Appeals', Project::count())
                ->description('All projects created')
                ->descriptionIcon('heroicon-m-folder')
                ->color('primary'),

            Stat::make('Total Posts', Post::count())
                ->description('News & updates')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('info'),

            Stat::make('Testimonials', Testimonial::count())
                ->description('User feedback entries')
                ->descriptionIcon('heroicon-m-chat-bubble-left')
                ->color('success'),

            Stat::make('Subscribers', Subscriber::count())
                ->description('Email list size')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('warning'),

            Stat::make('Impact Stats', ImpactStatistic::count())
                ->description('Impact metrics added')
                ->descriptionIcon('heroicon-m-chart-bar')
                ->color('danger'),
        ];
    }
}
