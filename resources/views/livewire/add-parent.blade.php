<div>
    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <button type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-success' }}"
                        wire:click="changeStep(1)">
                    1
                </button>
                <p>{{ trans('parent_trans.father_info') }}</p>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-success' }}"
                        wire:click="changeStep(2)">
                    2
                </button>
                <p>{{ trans('parent_trans.mother_info') }}</p>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-success' }}"
                        wire:click="changeStep(3)">
                    3
                </button>
                <p>{{ trans('parent_trans.confirm_info') }}</p>
            </div>
        </div>
    </div>



    <div>
        @include('livewire.father_form')
        @include('livewire.mother_form')

        @if($currentStep == 3)
            <div class="row setup-content" id="step-3">
                <div class="col-xs-12">
                    <div class="col-md-12">
                        <br>
                        <h4 style="font-family: 'Cairo', sans-serif;">{{ trans('parent_trans.save_data') }}</h4><br>
                        <button class="btn btn-success btn-sm btn-lg pull-right" wire:click="submitForm"
                                type="button">{{ trans('parent_trans.finish') }}</button>
                        <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button"
                                wire:click="back(2)">{{ trans('parent_trans.back') }}</button>
                    </div>
                </div>
            </div>
        @endif
    </div>


</div>
