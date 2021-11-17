@foreach($plans as $plan)
    <input type="radio" id="plan-{{ $plan->id }}" name="plan" @if($loop->first) checked @endif value="{{ $plan->id }}"
           class="radio-plan hidden">
    <label for="plan-{{ $plan->id }}"
           class="border-2 border-gray-300 w-full px-4 py-3 block rounded-lg cursor-pointer mb-3 relative">
        <div class="flex">
            <img src="/img/plans/{{ $plan->name }}.png" class="w-16 h-16 mr-3">
            <div>
                <span class="block">{{ ucfirst($plan->name) }}</span>
                <span class="text-xs text-gray-700">{{ $plan->description }}</span>
                <span
                    class="absolute right-0 bottom-0 bg-indigo-600 text-white font-bold rounded-br rounded-tl-lg text-xs px-2 py-1">
                    @if($plan->name == 'basic')
                        $10.00/mo.
                    @elseif($plan->name == 'plus')
                        $20.00/mo.
                    @elseif($plan->name == 'pro')
                        $30.00/mo.
                    @endif
                </span>
            </div>
        </div>
    </label>
@endforeach
