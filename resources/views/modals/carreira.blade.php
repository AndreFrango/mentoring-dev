 <div class="modal fade" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" data-toggle="tooltip" title="Fechar">&times;</button>
        <h4 class="modal-title">Carreira</h4>
      </div>
      <div class="modal-body">
      <form role="form"  method="POST" action="{{route('carrer.store')}}">
          @csrf
            <div class="form-group">
                <label>Nome</label>
                <input class="form-control">
                <!-- <p class="help-block">Example block-level help text here.</p> -->
            </div>
              <div class="form-group">
                  <label>Profissão</label>
                  <input class="form-control">
                 <!-- Combo com profissões existentes -->
              </div>
              <div class="form-group">
                <label>Status</label>
                <select class="form-control">
                    <option>Ativo</option>
                    <option>Inativo</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success btn-circle" data-toggle="tooltip" title="Salvar"><i class="fa fa-check"></i></button> 
            <button type="reset" class="btn btn-default btn-circle" data-toggle="tooltip" title="Limpar"><i class="fa fa-times"></i></button> 
        </form>
      </div>
    </div></div></div>  