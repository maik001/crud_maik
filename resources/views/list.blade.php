@include('header');
@if(session('message'))
<div class="alert alert-success">
    <p>{{session('message')}}</p>
</div>
@endif

<div class='container'>
    <div id='list' class='row'>
    <div class='table-responsive col-md-12' style='background-color: white;'>
        <h1></h1>
        <table class='table' cellspacing='0' cellpadding='0'>
            <h4>Lista de Documentos Cadastrados</h4>
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                    <th class='actions'>Ações</th>
                 </tr>
            </thead>
            <tbody>
                @foreach($documents as $doc)
 				<tr>
                                    
 					<td>{{ $doc->id}}</td>
 					<td>{{ $doc->title }}</td>
 					<td>{{ $doc->name_archive }}</td>
 					<td>{{ $doc->document_type->type_name}}</td>
 					<td class='actions'>
                        <a class='btn btn-primary btn-xs' href="/documents/edit/{{ $doc->id }}">Editar</a>
                        <a class='btn btn-danger btn-xs'  href="/documents/destroy/{{ $doc->id }}">Excluir</a>
                    </td>
 				</tr>
                @endforeach
            </tbody>
         </table>
     </div>
    </div>
   </div>