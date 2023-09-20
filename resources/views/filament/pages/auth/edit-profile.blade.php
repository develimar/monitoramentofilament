
{{--    <x-slot name="subheading">--}}
{{--        {{ $this->backAction }}--}}
{{--    </x-slot>--}}

<div>
    <div wire:snapshot="{&quot;data&quot;:{&quot;mountedActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedActionsArguments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;componentFileAttachments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsArguments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsComponents&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;77ivsh0ib4QTI9fwdn2d&quot;,&quot;name&quot;:&quot;filament.pages.dashboard&quot;,&quot;path&quot;:&quot;admin&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:{&quot;8ioz0c6&quot;:[&quot;div&quot;,&quot;FOyoyrSUyHTGobtS998Q&quot;]},&quot;errors&quot;:[],&quot;locale&quot;:&quot;pt_BR&quot;},&quot;checksum&quot;:&quot;1a282c5916c3750b3cc6f305c5078a7449ad7b83abf76f990c076835b8026ca5&quot;}" wire:effects="[]" wire:id="77ivsh0ib4QTI9fwdn2d" class="fi-page fi-dashboard-page">
        <section class="grid auto-cols-fr gap-y-8 py-8">
            <header class="fi-header flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <h1 class="fi-header-heading text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                        Meu Perfil
                    </h1>
                    <p class="fi-simple-header-subheading mt-2 text-left text-sm text-gray-500 dark:text-gray-600">
                        Gerencie seu Perfil
                    </p>
                </div>
            </header>
        </section>
    </div>
    <x-filament-panels::form wire:submit="save">
        {{ $this->form }}

        <x-filament-panels::form.actions
            :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
            alignment="right"
        />
    </x-filament-panels::form>
</div>

