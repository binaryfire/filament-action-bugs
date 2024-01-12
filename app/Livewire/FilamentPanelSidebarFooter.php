<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

class FilamentPanelSidebarFooter extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;

    public function testFooterAction(): Action
    {
        return Action::make('testFooterAction')
            ->requiresConfirmation()
            ->modalHeading('Test modal')
            ->action(fn () => null)
            ->icon('heroicon-o-chat-bubble-left-ellipsis')
            ->iconButton()
            ->tooltip('Test footer action')
            ->extraAttributes([
                'class' => 'border border-gray-500',
            ]);
            
    }

    public function render()
    {
        return view('filament.panel-sidebar-footer');
    }
}
