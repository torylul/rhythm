<div>
    <form method="GET" action="{{ route('admin.shadule.filter') }}">
        <div class="">
            <div class="d-flex pt-2 flex-wrap">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="day" id="all" value="all"
                           onchange="this.form.submit()" checked>
                    <label class="form-check-label pe-3" for="all">
                        Все дни
                    </label>
                </div>
                @foreach($days as $day)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="day" id="day{{ $day->id }}"
                               value="{{ $day->id }}"
                               {{ old('day') == $day->id ? "checked" : '' }}
                               onchange="this.form.submit()"
                        >
                        <label class="form-check-label pe-3" for="day{{ $day->id }}">
                            {{ $day->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="d-flex pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="group" id="allgroup" value="all"
                           onchange="this.form.submit()" checked>
                    <label class="form-check-label pe-3" for="allgroup">
                        Все группы
                    </label>
                </div>
                @foreach($groups as $group)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="group" id="group{{ $group->id }}"
                               value="{{ $group->id }}"
                               {{ old('group') == $group->id ? "checked" : '' }}
                               onchange="this.form.submit()"
                        >
                        <label class="form-check-label pe-3" for="group{{ $group->id }}">
                            {{ $group->name }}
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="d-flex pt-2">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="hall" id="allhall" value="all"
                           onchange="this.form.submit()" checked>
                    <label class="form-check-label pe-3" for="allhall">
                        Все залы
                    </label>
                </div>
                @foreach($halls as $hall)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="hall" id="hall{{ $hall->id }}"
                               value="{{ $hall->id }}"
                               {{ old('hall') == $hall->id ? "checked" : '' }}
                               onchange="this.form.submit()"
                        >
                        <label class="form-check-label pe-3" for="hall{{ $hall->id }}">
                            {{ $hall->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </form>
</div>
