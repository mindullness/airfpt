@extends('airfpt.layout.layout')
@section('title', 'Elequent Products Site')
@section('content')
<div class="container">
    <br>
    <center>
    <h2>FAQS</h2>
    </center>
    <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
            At the airport
          <i class="fa fa-plus"></i>
        </a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">
        <div name="scroll0"></div>
                  <div>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">When to get to the airport for
                          domestic flights?</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">Please make sure you arrive at
                              the airport with plenty of time to check in, get your boarding pass before check-in
                              closes, and clear security. See tables (below) for timelines.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Remember, if you’re not at the
                              boarding gate on time, you won’t be able to board your flight and you may lose your fare
                              in full.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">All timings listed below refer
                              to scheduled departure times unless you are notified otherwise during a delay.</span></li>
                        </ul>
                      </li>
                    </ul>
                    <p style="margin-left:80px;text-align:justify;"><span style="font-size:17px;"><strong>Domestic
                          flights:</strong></span></p>
                    <figure class="table" style="text-align:justify;">
                      <table>
                        <tbody>
                          <tr>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">2 hours before scheduled departure</span></td>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">check-in and bag drop opened</span></td>
                          </tr>
                          <tr>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">40 min before scheduled departure</span></td>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">check-in and bag drop closed</span></td>
                          </tr>
                          <tr>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">25 min before scheduled departure</span></td>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">be at your boarding gate</span></td>
                          </tr>
                          <tr>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">15 min before scheduled departure</span></td>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">boarding gate closed</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </figure>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">When to get to the airport for
                          international flights?</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">Please make sure you arrive at
                              the airport with plenty of time to check in, get your boarding pass before check-in
                              closes, and clear security. See the tables below for timelines.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">If you’re not at the boarding
                              gate before it closes, you won’t be able to board your flight and you may lose your fare
                              in full.</span></li>
                        </ul>
                      </li>
                    </ul>
                    <p style="margin-left:80px;text-align:justify;"><span style="font-size:17px;"><strong>International
                          flights:</strong></span></p>
                    <figure class="table" style="text-align:justify;">
                      <table>
                        <tbody>
                          <tr>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">3 hours before scheduled departure</span></td>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">check-in and bag drop opened</span></td>
                          </tr>
                          <tr>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">50 min before scheduled departure</span></td>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">check-in and bag drop closed</span></td>
                          </tr>
                          <tr>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">40 min before scheduled departure</span></td>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">be at your boarding gate</span></td>
                          </tr>
                          <tr>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">15 min before scheduled departure</span></td>
                            <td
                              style="border-bottom:1px inset hsl(207, 90%, 54%);border-left:1px inset hsl(207, 90%, 54%);border-right:1px inset hsl(207, 90%, 54%);border-top:1px inset hsl(207, 90%, 54%);">
                              <span style="font-size:17px;">boarding gate closed</span></td>
                          </tr>
                        </tbody>
                      </table>
                    </figure>
                  </div>
                
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseTwo">
        Carry-on baggage
        <i class="fa fa-plus"></i>
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div name="scroll1"></div>
                  <div>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">The Passenger allows to bring 02
                          pieces of carry on baggage onto the cabin which are a main bag and a small package.</span>
                      </li>
                      <li style="text-align:justify;"><span style="font-size:17px;">The main carry-on baggage must fit
                          in the carry-on baggage compartment and must not exceed 56cm (height) x 36cm (width) x 23cm
                          (depth).</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Your small luggage must fit under
                          the seat in front of you.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Small packages</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">The small item you bring on board
                          may be:</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">Hand bag, pocket book or
                              purse</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Laptops in thin pockets</span>
                          </li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Small camera</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Baby food for use on the
                              flight</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Approved duty free goods</span>
                          </li>
                        </ul>
                      </li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Carry-on baggage at the boarding
                          gate.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Carry-on baggage must be checked at
                          the boarding gate. If you carry too many items, or they exceed the size or weight limit, your
                          oversized baggage will need to be checked-in and subject to a fee.</span></li>
                    </ul>
                  </div>
                </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseThree">
            Checked baggage
        <i class="fa fa-plus"></i>
      </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">Maximum weight for per
                          package?</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">Each baggage or piece of luggage
                              cannot weigh more than 32kg. If you have a checked baggage allowance of 35kg or 40kg, you
                              must split into at least two bags, with each bag weight no more than 32kg.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">In case of any piece of checked
                              baggage is over 32kg then it should be traveled as a fragile item.</span></li>
                        </ul>
                      </li>
                    </ul>
                    <p style="text-align:justify;">&nbsp;</p>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">Can I brings fish sauce to the
                          plane?</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">Vietravel Airlines accepts to
                              transport fish sauce on checked baggage that meets the following packaging
                              conditions:</span>
                            <ul>
                              <li style="text-align:justify;"><span style="font-size:17px;">Fish sauce bottles are not
                                  broken plastic bottles (other materials will not be accepted).</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Bottles of fish sauce must
                                  be kept in foam containers (only the bottles of fish sauce and no other items).</span>
                              </li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Fish sauce must be carefully
                                  packed, with taped tape to wrap the foam container.</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">A passenger may bring a
                                  maximum of 5 liters of fish sauce</span></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <p style="text-align:justify;">&nbsp;</p>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">Can I brings fresh seefood to the
                          plane?</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Vietravel Airlines accepts to
                          transport fresh seafood on checked baggage meeting the following conditions of
                          packaging:</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">Must be kept in a foam
                              container.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">There is no water or ice in the
                              foam container.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Carefully pack and tape
                              around.</span></li>
                        </ul>
                      </li>
                    </ul>
                    <p style="text-align:justify;">&nbsp;</p>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">Can I take my pet along with me on
                          the flight?</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">Vietravel Airlines is not
                              equipped to transport your pets.</span></li>
                        </ul>
                      </li>
                    </ul>
                    <p style="text-align:justify;">&nbsp;</p>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">Can I bring a pram, stroller,
                          portable cot or highchair as checked baggage?</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">If you travel along with an
                              infant or a small child, you may bring one of each of the following:</span>
                            <ul>
                              <li style="text-align:justify;"><span style="font-size:17px;">A stroller, pusher or
                                  pram</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">A portable cot (portacot)
                                  and bedding</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">A portable high chair</span>
                              </li>
                            </ul>
                          </li>
                          <li style="text-align:justify;"><span style="font-size:17px;">These items are carried as
                              checked baggage for free, regardless of fare and in addition to any checked-baggage
                              allowance.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">If your trolley can be folded
                              down to a portable baggage size (56cm (height) x 36cm (width) x 23cm (depth)) and it is
                              securely packed within a cover / bag After that, it can then be transported on board most
                              Vietravel Airlines flights. It will be charged to your free carry-on baggage.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Make sure you pack all items as
                              securely as possible to minimise the risk of damage.</span></li>
                        </ul>
                      </li>
                    </ul>
                    <p style="text-align:justify;">&nbsp;</p>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">What items should not be put in the
                          checked baggage?</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">Due to the safety reasons, the
                              passenger should not put the following itemes in the checked baggage:</span>
                            <ul>
                              <li style="text-align:justify;"><span style="font-size:17px;">Fragile items</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Computers</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Money</span><br><span
                                  style="font-size:17px;">Valuable documents</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Business documents</span>
                              </li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Electronics</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Passports</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Medication</span></li>
                              <li style="text-align:justify;"><span style="font-size:17px;">Precious metals and
                                  stones</span><br>&nbsp;</li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse4">
        Oversized baggage
          <i class="fa fa-plus"></i>
        </a>
      </div>
      <div id="collapse4" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">Oversized items</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">The total dimension between
                              158cm/62in and 203cm/80in, including wheels, handles and packaging is an oversized
                              item.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">You will need to pay the
                              oversized item handling fee for sporting equipment, such as surfboards, skis, fishing rods
                              and golf bags, bikes, large musical instruments and other large items like paintings,
                              statues, televisions, and furniture if they have any side longer than one metre. Any
                              oversized assistive devices, mobility aids, medical equipment and infant items can be
                              checked in for free.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">The oversized item fee is a
                              separate handling fee that applies to any item with the total dimension between 158cm/62in
                              and 203cm/80in. The oversized item fee does not apply to oversized assistive devices,
                              mobility aids, medical equipment and infant items.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Any oversized items will be
                              charged the fee per item, per flight. Each passenger can bring up to two oversized
                              items.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">The oversized item fee is paid
                              in addition to any checked baggage allowance, it does not increase your baggage
                              allowance</span></li>
                        </ul>
                      </li>
                    </ul>
                    <p style="text-align:justify;">&nbsp;</p>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">How to pre-purchase oversized items
                          service?</span>
                        <ul>
                          <li style="text-align:justify;"><span style="font-size:17px;">The oversized items can be
                              pre-purchased via our Call Center (+84) 19006686 or customer can be access our website at
                              vietravelairlines.vn to do it.</span></li>
                          <li style="text-align:justify;"><span style="font-size:17px;">Otherwise, customer can also go
                              to our ticket offices to pre-purchase this service</span><br>&nbsp;</li>
                        </ul>
                      </li>
                    </ul>
                  </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse5">
        Do my baggage stranfer directly on the connecting flights?
          <i class="fa fa-plus"></i>
        </a>
      </div>
      <div id="collapse5" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div name="scroll4"></div>
                  <div>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">Please be aware that we don’t
                          transfer your baggage between flights. If you’re transferring between domestic flights or
                          between international and domestic flights, in most cases you’ll need to collect your baggage,
                          check in again and transfer your bags.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">If you book a separate flight that’s
                          not with our partner airlines, we recommend you allow at least 3 hours in between these
                          flights.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">In case of you need our support
                          please contact our airport staff</span></li>
                    </ul>
                  </div>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse6">
        Travelling with Infant/Child
          <i class="fa fa-plus"></i>
        </a>
      </div>
      <div id="collapse6" class="collapse" data-parent="#accordion">
        <div class="card-body">
        <div>
                    <ul>
                      <li style="text-align:justify;"><span style="font-size:17px;">We refer to children under 2 years
                          old as infants.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">The infant will seat on the
                          accompanied passenger’s lap during the flight. The accompanied passenger will be provided with
                          a special seat belt for their infant that connects to your seatbelt.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">If you travel with an infant or a
                          child, you won’t be able to travel in an exit row seat (this includes extra legroom
                          seats).</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Children aged 2 years or older must
                          travel in an allocated seat for safety reasons, so you’ll need to purchase a fare for
                          them.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Passengers must be at least 15 years
                          old to sit in exit rows. This includes all extra legroom seats.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Proof of age, such as a birth
                          certificate or passport, may be required for infants under 2 years. If you don’t provide an
                          acceptable form of identification for the infant upon request at check-in, your infant may not
                          be allowed to travel.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">If you’re travelling on an
                          international flight, the passport will be required for both infant and child.</span></li>
                      <li style="text-align:justify;"><span style="font-size:17px;">Infant less than 7 days old may not
                          travel with Vietravel Airlines</span></li>
                    </ul>
                  </div>
        </div>
      </div>
    </div>
@endsection