<?php

declare(strict_types=1);

namespace App\Livewire;

use Livewire\Component;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

class FilamentPanelSidebarHeader extends Component implements HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithForms;

    public function testHeaderAction(): Action
    {
        return Action::make('testHeader')
            ->label('Some important action')
            ->requiresConfirmation()
            ->modalHeading('Test modal')
            ->action(fn () => null)
            ->extraAttributes([
                'class' => 'border border-gray-500 w-full',
            ]);
            
    }

    public function render()
    {
        return view('filament.panel-sidebar-header');
    }
}
