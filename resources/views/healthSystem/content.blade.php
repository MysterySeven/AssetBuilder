
@extends('index')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.18.0/sweetalert2.min.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style type="text/css">
    	.material-icons.md-62 { font-size: 62px; }
    	.feature-item {
		    display: inline-block;
		    text-align: center;
		    cursor: pointer;
		    border: 1px solid dodgerblue;
		    width: 127px;
		    border-radius: 3px;
		    margin: 5px;
		} 
		.app-content {
		    margin-top: 20px;
		}
    .save-btn {
        float: right;
        margin-right: 100px;
    }
    .btn-wrap {
      margin-top: 100px;
    }
    #myTabContent {
        min-height: 400px;
    }
    .btn-custom {
        margin: 10px;
    }
    </style>
@endsection
@section('content')
<div id="app">
  <ul class="nav nav-tabs">
    <!-- <li class="nav-item">
      <a class="nav-link active show" data-toggle="tab" href="#healthcare">HealthCare System</a>
    </li> -->
   

  </ul>
  <div id="myTabContent" class="tab-content app-content">
    <!-- <div class="tab-pane fade active show" id="healthcare"> -->

     <div class="features" v-if="isReady">
      <div class="feature-item" v-for="feature in this.apps.find(x => x.name==='HealthCare').features" @click="addFeature('Healthcare', feature)">
       <i class="material-icons md-62" >@{{ feature.icon }}</i>
       <p>@{{ feature.title }}</p>
     </div>
    <!-- <div class="feature-item">
        <i class="material-icons md-62">developer_board</i></a>
        <p>Authentication</p>
      </div>
      <div class="feature-item">
        <i class="material-icons md-62">security</i>
        <p>Dashboard</p>
      </div>
      <div class="feature-item">
        <i class="material-icons md-62">screen_lock_landscape</i>
        <p>Database</p>
      </div>
      <div class="feature-item">
        <i class="material-icons md-62">cloud</i>
        <p>Contact Us Form</p>
      </div>-->
    </div>
    <p class="btn-wrap">
      <hr class="my-5">

      <a class="btn btn-primary btn-lg" href="#" role="button" @click="save">SAVE</a>
    </p>
  </div>
  <div class="tab-pane fade" id="inventory">
    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
  </div>
  <div class="tab-pane fade" id="issue">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  </div>
  <div class="tab-pane fade" id="mobile">
    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
  </div>
  <div class="tab-pane fade" id="knowledge">
    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
  </div>
</div>
</div>
@endsection

@section('jsscripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.3/sweetalert2.all.js"></script>
<script type="text/javascript">
  var vm = new Vue({
    el: "#app",
    data: {
      apps: [],
      type: 'button',
      isReady: false,
      selectedFeatures: []

    },
    created: function() {
      //perform GET request to the API
      //let's hardcode things for now
      this.apps = [
      {
        name: "HealthCare",
        desc: "HealthCare system - web application",
        features: [
        {title: "Authentication", icon: "developer_board" },
        {title: "Dashboard", icon: "security" },
        {title: "Database", icon: "screen_lock_landscape" },
        {title: "Contact Us", icon: "cloud"}
        ]
      },
      {
        name: "Inventory system"
      },
      {
        name: "Issue Tracking"
      }
      ];
      console.log(this.apps);
      this.isReady = true;

      console.log(this.apps.find(x => x.name==="HealthCare"));
    
    },
     methods: {
      addFeature: function(system, feature) {
        
        this.selectedFeatures.push(feature);  

      },
      save: function() {
        var sFeatures = this.extractArray(this.selectedFeatures)
        /*.map((name) => {
          return {count: 1, name: name}
        })
        .reduce((a, b) => {
          a[b.name] = (a[b.name] || 0) + b.count
          return a
        }, {})*/
        console.log(sFeatures)
        swal({
          title: 'You have selected:',
          type: 'question',
          html: '<h3>' + sFeatures + '</h3>' + 
                '<br /><br />' + 
                'What would you like to do?',
          animation: false,
          customClass: 'animated bounceIn',
          showCancelButton: true,
          cancelButtonText: 'Add More Features',
          confirmButtonText: 'Proceed to checkout',
          reverseButtons: true,
          buttonsStyling: false,
          confirmButtonClass: 'btn btn-primary btn-custom',
          cancelButtonClass: 'btn btn-default btn-custom',

        }).then((result) => {
            if(result.value) {
              window.location.href = '/checkout'
            }
        })
      },
      extractArray: function(arr) {
        var str = '';
        arr.forEach(function(entry) {
          str += (entry.title + ' ')
        });
        return str;
      }
    }
  })
</script>

@endsection