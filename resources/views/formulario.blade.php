<link  rel="stylesheet" href="{{asset('css/style.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<div class="container-middle">
    <div class="container-fluid">
        <div class="row">
             <div class="col-6">
                   <form  action="/add">
                       <div class="mb-3">
                           <label for="exampleFormControlInput1" class="form-label">Nome</label>
                           <input  name="nome" type="text" class="form-control" placeholder="Nome">
                         </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email </label>
                           <input  name="email" type="email" class="form-control"  placeholder="name@example.com">
                         </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        </div>

                   </form>
             </div>
             <div class="col-6">
                <table class="table table-striped">
                    <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Email</th>

                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $i = 1;
                        @endphp
                    @foreach($data as $task)
                        <tr>
                          <th scope="row">{{$i++}}</th>
                          <td>{{$task->nome}}</td>
                          <td>{{$task->email}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                  </table>
             </div>
        </div>
      </div>
 </div>
