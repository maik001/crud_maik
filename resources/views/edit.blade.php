@include('header');

<div class="container">
    <form action="{{ route('document_edit', ['id' => $document->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Título</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" value={{ $document->title}} name="title" required>
        </div>
        <div class="mb-3">
            <label for="" class="form-label" name="description">Descrição</label>
            <input class="form-control" id="exampleFormControlTextarea1" rows="3" value={{ $document->name_archive}} name="description" required>
        </div>

        <label for="" class="form-label">Tipos</label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" value={{ $document->document_type->id}} name="type" required>
        
        <datalist id="datalistOptions">     
            @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->type_name }}</option>
            @endforeach
        </datalist>

        <div style="padding-top: 20px">
            <a href="/documents" class="btn btn-secondary" tabindex="-1" role="button">Voltar</a>
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>
</div>