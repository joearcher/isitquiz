<div class="row">
    <div class="col-xs-12 text-center selector-button">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
            Decide who's saving the table
        </button>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Random Table Saver Selection</h4>
      </div>
      <div class="modal-body">
        <p>Click the button below to begin the process of completely randomly selecting a person to save the table.</p>
        <p id="loader">Performing extremely complex randomisation algorithms..please wait <img src="/img/ajax-loader.gif" /></p>
        <div id="result">
          <p>The completely randomly selected person to save the table this month is:</p>
          <p style="text-align:center; font-size:6rem;"><strong>Steve</strong></p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button id="randomise" type="button" class="btn btn-success">Choose a table saver at random</button>
      </div>
    </div>
  </div>
</div>