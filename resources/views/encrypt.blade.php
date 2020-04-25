@extends('master') @section('content')
<form action="{{ route('store') }}" method="POST">
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
            <label class="label">Encryption Key</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <input
                        title="Key"
                        class="input"
                        type="text"
                        name="key"
                        placeholder="Enter Encryption Key"
                        required
                    />
                </p>
            </div>
        </div>
    </div>

    <div class="field is-horizontal">
        <div class="field-label is-normal">
            <label class="label">Value</label>
        </div>
        <div class="field-body">
            <div class="field">
                <p class="control">
                    <textarea
                        name="value"
                        title="Value"
                        class="textarea"
                        cols="30"
                        rows="10"
                        placeholder="Paste your JSON"
                        required
                    ></textarea>
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
                        Save
                    </button>
                </p>
            </div>
        </div>
    </div>
</form>
@endsection
