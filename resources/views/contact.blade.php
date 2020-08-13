@extends('layouts.frontend')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

@section('content')
<div class="ImageBackground py-5">
    <div class="container   ">
      <div class="p-4 gradiant-sakani rounded-sakani">
        <!-- title -->
        <div style="">
          <h3 class="text-center">Contactez-Nous</h3>
          <hr class="middle-const">
        </div>
        <!-- content -->
        <div class="row">
          <!-- send message -->
          <div class="col-lg-8 col-sm-12">
            <form class="text-white font-weight-bold">
              <div class="form-group">
                <label for="fullname">Nom Complet</label>
                <input type="text" class="form-control RE-input-sakani" id="fullname" placeholder="Nom Complet">
              </div>
              <div class="form-group ">
                <label for="email">Adress Email</label>
                <input type="email" class="form-control RE-input-sakani" id="email" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Sujet</label>
                <select class="form-control RE-input-sakani" id="exampleFormControlSelect1">
                  <option>Signaler un bug</option>
                  <option>Plainte</option>
                  <option>Faire un Publicité</option>
                  <option>Suggestion</option>
                  <option>Remerciement</option>
                  <option>Autre</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control RE-input-sakani" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button class=" btn-sakani px-5">Envoyer</button>
              </div>
            </form>
          </div>
          <!-- other infos -->
          <div class="col-lg-4 p-4">
            <!-- nos contact -->
            <table class="text-white mb-5" width="100%">
              <tr>
                <td align="center" rowspan="3" valign="top" width="20%"><i
                    class="fa fa-paper-plane fa-2x text-sakani"></i></td>
                <td class="h2 pb-2">Nos Contact</td>
              </tr>
              <tr>
                <td>Email: support@sakani.com</td>
              </tr>
              <tr>
                <td>Telephone: 0123456789</td>
              </tr>
            </table>
            <!-- address -->
            <table class="text-white mb-5" width="100%">
              <tr>
                <td align="center" rowspan="2" valign="top" width="20%"><i
                    class="fa fa-map-marker-alt fa-2x text-sakani"></i></td>
                <td class="h2 pb-2">Adresse</td>
              </tr>
              <tr>
                <td>Oued el alleug</td>
              </tr>
            </table>
            <!-- social media -->
            <table class="text-white mb-5" width="100%">
              <tr>
                <td align="center" rowspan="2" valign="top" width="20%"><i class="fa fa-share fa-2x text-sakani"></i>
                </td>
                <td class="h2 pb-2">Social Media</td>
              </tr>
              <tr>
                <td>
                  <a href="#" class="px-2"><i class="fab fa-facebook-square text-white "></i></a>
                  <a href="#" class="px-2"><i class="fab fa-twitter-square text-white "></i></a>
                  <a href="#" class="px-2"><i class="fab fa-instagram text-white "></i></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>

    
@stop