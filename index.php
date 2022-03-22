<?php require('header.php');?>
<section id="quemsomos">
  <div class="container-fluid quemsomos text-center padding">
    <h2 class="padding">Quem somos</h2><img src="img/if3pcoxoyb2z.png" class="rounded-circle padding" width='50%' alt="if3pcoxoyb2z">
    <h3>Somos um time comprometido com o sucesso!</h3>
  </div>
</section>
<section id="parceiros">
  <div class="container-fluid text-center padding parceiros">
    <h2 class='padding'>PARCEIROS</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4"><img src="img/raphaelhide.jpg" class="img-fluid rounded-circle padding" width='70%' alt="raphaelhide"></div>
        <div class="col-lg-4"><img src="img/deus.jpg" class="img-fluid rounded-circle padding" width='70%' height='200%' alt="deus"></div>
        <div class="col-lg-4"><img src="img/fhoer.jpg" class="img-fluid rounded-circle padding" width='70%' alt="fhoer"></div>
      </div>
    </div>
  </div>
</section>
<section id="servicos">
  <div class="container-fluid text-center padding servicos">
    <h2 class='padding'>SERVIÇOS</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-6"><img src="img/casalzao.jpg" class="img-fluid rounded padding" width='100%' alt="casalzao"></div>
        <div class="col-lg-6"><img src="img/sonegar.jfif" class="img-fluid rounded padding" width='100%' alt="sonegar"></div>
      </div>
    </div>
  </div>
</section>
<section id="doacao">
  <div class="container-fluid text-center padding doacao">
    <h2 class="padding">Spare some change?</h2><img src="img/change.png" class="rounded padding" width='100%' alt="change"> <button type="button" class="btn change" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">For the greater good</button>
    <div class="modal fade messagebox" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="labelDoacao">Fazer Doação</h5>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <img src="img/btcadress.png" class="img-fluid padding" width='100%' alt="btcadress">
                <p>1AVptm7ZaZGCJFV79TsnGQDeVrR3umDdNQ</p>
              </div>
              <div class="col-lg-6">
                <img src="img/ethadress.png" class="img-fluid padding" width='100%' alt="ethadress">
                <p>0x0efda6374e31961b3c70af664e3916b9359cba00</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <img src="img/adaadress.png" class="img-fluid padding" width='100%' alt="adaadress">
                <p>DdzFFzCqrht9z5aLErtMpkCEe2b21dW1qPmmKfsjsWeLrgHm2Az5AX7dBHCMXKPzTeszKRjPYgyFiWwPuqDovfzkR19QJ5KB23QBPcV5</p>
              </div>
              <div class="col-lg-6">
                <img src="img/nanoadress.png" class="img-fluid padding" width='100%' alt="nanoadress">
                <p>nano_1jjzjaqpz4wucq3zrk1opxz3ez6hjommndjnuxw45oejer5errt3i3gygf6y</p>
                <p style="font-size: small;">Minimum deposit amount: 0.001 NANO.</p>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="row">
              <div class="col-lg-12"><img src="img/boleto.png" data-bs-target="#exampleModal2" data-bs-toggle="modal" class="img-fluid btn padding" width='50%' alt="boleto"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade messagebox" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="labelDoacao">Fazer Doação</h5>
        </div>
        <div class="modal-body">
          <form id='form' name="form">
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Nome:</label> <input type="text" class="form-control" id="nome" placeholder="Nome">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">CPF/CNPJ:</label> 
              <textarea class="form-control" id="cpfcnpj" placeholder="CPF/CNPJ"></textarea>
            </div>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Valor:</label> <input type="text" class="form-control" id="valor" placeholder="Valor minimo R$3,90">
            </div>
          </form>
          <div id='retorno' class='row padding'></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button onclick="gerarBoleto()" type="button" class="btn btn-primary change">Gerar boleto</button>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="js/jquery.js"></script> 
<script src="js/boleto.js"></script>

<?php require('footer.php') ?>