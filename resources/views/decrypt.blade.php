@extends('master') @section('content')
    <form action="{{ route('show') }}" method="POST">
        @csrf
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">ID</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input
                            title="ID"
                            class="input"
                            type="text"
                            name="id"
                            placeholder="Enter ID"
                            required
                        />
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Decryption Key</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <input
                            title="Key"
                            class="input"
                            type="text"
                            name="key"
                            placeholder="Enter Decryption Key"

                        />
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal"></div>
            <div class="field-body">
                <div class="field">
                    <p class="control">
                        <button class="button is-primary" type="submit">
                            Retrieve
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </form>
@endsection
