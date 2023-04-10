<div class="mt-2">
    <form method="GET" action="{{ route('admin.record.filter') }}">
        <div class="input-group rounded mt-4 mb-4">
            <input type="search" class="form-control rounded" placeholder="Поиск клиента по фамилии" aria-label="Search"
                   name="search"
                   aria-describedby="search-addon" oninput="this.form.submit()" value="{{ old('search') }}"/>
        </div>
        <div class="">
            <div class="d-flex pt-2 flex-wrap">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="all" value="all"
                           onchange="this.form.submit()" checked>
                    <label class="form-check-label pe-3" for="all">
                        Все дни
                    </label>
                </div>
                @foreach($statuses as $status)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="status{{ $status->id }}"
                               value="{{ $status->id }}"
                               {{ old('status') == $status->id ? "checked" : '' }}
                               onchange="this.form.submit()"
                        >
                        <label class="form-check-label pe-3" for="status{{ $status->id }}">
                            {{ $status->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
    </form>
</div>
