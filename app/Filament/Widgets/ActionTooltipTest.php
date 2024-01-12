<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

class ActionTooltipTest extends Widget implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;
    
    protected static string $view = 'filament.widgets.action-tooltip-test';

    public function testAction(): Action
    {
        return Action::make('test')
            ->requiresConfirmation()
            ->modalHeading('Test modal')
            ->action(fn () => null)
            ->icon('heroicon-o-chat-bubble-left-ellipsis')
            ->iconButton()
            ->tooltip('Test tooltip')
            ->extraAttributes([
                'class' => 'border border-gray-500',
            ]);
            
    }
}
