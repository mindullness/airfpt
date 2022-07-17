@extends('airfpt.layout.layout')
@section('title', 'select seat')
@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="padd">
            <h2 class="news-title">Restricted baggage</h2>
        </div>
        <div class="padd">
            <div class="content">
                <div>
                    <p style="text-align:justify;">R<span style="font-size:17px;">esticted and prohibited baggage icludes restricted and prohibited items that are not accepted as baggage or inclued in baggage.</span></p>
                    <p style="text-align:justify;"><span style="background-color:none;color:#005CAA;font-size:17px;"><strong>Air FPT</strong></span><span style="background-color:none;color:#212529;font-size:17px;"> reserves the right to refuse to carriage items (in carry-on and checked baggage) as follows:</span></p>
                    <ul style="padding-left: 20px;">
                        <li style="text-align:justify;"><span style="background-color:none;color:#212529;font-size:17px;">Items capable of causing unsafety or/and not security to the flight according to The dangerous goods regulations of the International Civil Aviation Organization (ICAO) and the International Air Transport Association (IATA) and</span><span style="background-color:none;font-size:17px;"> the </span><a href="https://vietravelairlines.vn/vn/en/legal/condition-of-carriage"><span style="background-color:none;font-size:17px;">Conditions of Carriage</span></a><span style="background-color:none;font-size:17px;"> of our contract.</span></li>
                        <li style="text-align:justify;"><span style="background-color:none;color:#212529;font-size:17px;">Items capable of causing unsafety or/and not security to the aircraft, passengers, and properties on the flight; explosives, air tank, corrosives, oxidizers, radioactive materials, magnetic materials, flammable substances, toxic substances, bleacher.</span></li>
                        <li style="text-align:justify;"><span style="background-color:none;color:#212529;font-size:17px;">Items that are prohibited in accordance with applicable laws, regulations or orders of &nbsp;any states or country of destination, departure or transit point;</span></li>
                        <li style="text-align:justify;"><span style="background-color:none;color:#212529;font-size:17px;">Items that, in Air FPT point of view, are not suitable for carriage due to their weight safe, size or nature;</span></li>
                        <li style="text-align:justify;"><span style="background-color:none;color:#212529;font-size:17px;">Live animal; weapons and firearms.</span></li>
                    </ul>
                    <p style="text-align:justify;"><span style="font-size:17px;"><strong>List of prohibited items not allowed on flight of </strong></span><span style="color:#005caa;font-size:17px;"><strong>Air FPT:</strong></span></p>
                    <figure class="table" style="width:100.0%;">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none; vertical-align: middle">
                            <tbody>
                                <tr>
                                    <td style="vertical-align: middle; background-color:#005caa;border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);padding:0in 5.4pt;width:18.42%;">
                                        <p style="text-align:center;"><span style="color:hsl(0,0%,100%);font-size:17px;"><strong>Type</strong></span></p>
                                    </td>
                                    <td style="vertical-align: middle; background-color:#005caa;border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);padding:0in 5.4pt;">
                                        <p style="text-align:center;"><span style="color:hsl(0,0%,100%);font-size:17px;"><strong>Definition</strong></span></p>
                                    </td>
                                    <td style="vertical-align: middle; background-color:#005caa;border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <p style="text-align:center;"><span style="color:hsl(0,0%,100%);font-size:17px;"><strong>Image</strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:18.42%;"><span style="font-size:17px;"><strong>Explosives</strong></span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;"><span style="font-size:17px;">Grenades, Dynamite, Gunpowder, Flares, Fireworks and Lookalike items, etc.</span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <figure class="image"><img src="{{asset('/images/explosive.png')}}" alt="http://media.vietravelairlines.com/public/uploads/news/1606976875892.png"></figure>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:18.42%;"><span style="font-size:17px;"><strong>Gases, Flammable&nbsp;</strong></span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;"><span style="font-size:17px;">Gasoline, matches, Lighters, Flammable liquid, Beverages containing 70% or more alcohol by volume, etc.</span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <figure class="image"><img src="{{asset('/images/gas.png')}}" alt="http://media.vietravelairlines.com/public/uploads/news/1606967805740.png"></figure>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:18.42%;"><span style="font-size:17px;"><strong>Radioactive, Infectious, Toxic substances, Corrosives</strong></span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;">
                                        <p style="text-align:justify;"><span style="font-size:17px;">Chlorine, Bleacher, Oxidizers, Mercury, Contagious Hazards, radioactive Materials, etc.</span></p>
                                    </td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <figure class="image"><img src="{{asset('/images/toxic.png')}}" alt="http://media.vietravelairlines.com/public/uploads/news/1606968298761.png"></figure>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:18.42%;"><span style="font-size:17px;"><strong>Other dangerous items</strong></span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;">
                                        <p style="text-align:justify;"><span style="font-size:17px;">Fire extinguishers, Air tank</span></p>
                                        <p style="text-align:justify;"><span style="font-size:17px;">Lithium battery for Electronic equipment whose power &gt;160Wh or &gt;8g lithium (regardless of lithium battery for wheelchairs of passengers having limitation in mobility), etc.</span></p>
                                    </td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <figure class="image"><img src="{{asset('/images/fire.png')}}" alt="http://media.vietravelairlines.com/public/uploads/news/1606968430149.png"></figure>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:18.42%;"><span style="font-size:17px;"><strong>Firearms and lookalike items</strong></span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;">
                                        <p style="text-align:justify;"><span style="font-size:17px;">All types of firearms, Part of firearms, Ammunition, Stun guns, Imitation Firearms, Toy guns, etc.</span></p>
                                    </td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <figure class="image"><img src="{{asset('/images/gun.png')}}" alt="http://media.vietravelairlines.com/public/uploads/news/1606968866006.png"></figure>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <p style="text-align:justify;"><span style="font-size:17px;"><strong>List of restricted items and/or counted in checked baggage only:</strong></span></p>
                    <figure class="table" style="width:100.0%;">
                        <table style="border-bottom:none;border-left:none;border-right:none;border-top:none;">
                            <tbody>
                                <tr>
                                    <td style="vertical-align: middle; background-color:#005caa;border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);padding:0in 5.4pt;width:18.42%;">
                                        <p style="text-align:center;"><span style="color:hsl(0,0%,100%);font-size:17px;"><strong>Type</strong></span></p>
                                    </td>
                                    <td style="vertical-align: middle; background-color:#005caa;border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);padding:0in 5.4pt;width:150px;">
                                        <p style="text-align:center;"><span style="color:hsl(0,0%,100%);font-size:17px;"><strong>Definition</strong></span></p>
                                    </td>
                                    <td style="vertical-align: middle; background-color:#005caa;border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <p style="text-align:center;"><span style="color:hsl(0,0%,100%);font-size:17px;"><strong>Image</strong></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:18.42%;"><span style="font-size:17px;"><strong>Sharp objects or weapons</strong></span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:150px;"><span style="font-size:17px;">Knife, Sword, Box Cutter, Dart, Scissors, etc.</span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <figure class="image"><img src="{{asset('/images/cutter.png')}}" alt="http://media.vietravelairlines.com/public/uploads/news/1606968713183.png"></figure>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:18.42%;"><span style="font-size:17px;"><strong>Injuring items</strong></span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;width:150px;"><span style="font-size:17px;">Crowbar, Shovels, Drills/Screwdrivers, Blow Touch, Blades or Shafts longer than 6cm, Wrenches, Spanners and Pliers longer than 10 cm in total length, etc.</span></td>
                                    <td style="vertical-align: middle; border-bottom:0.5px solid hsl(207, 90%, 54%);border-left:0.5px solid hsl(207, 90%, 54%);border-right:0.5px solid hsl(207, 90%, 54%);border-top:0.5px solid hsl(207, 90%, 54%);height:150px;padding:0in 5.4pt;text-align:center;width:18.42%;">
                                        <figure class="image"><img src="{{asset('/images/crowbar.png')}}" alt="http://media.vietravelairlines.com/public/uploads/news/1606968802719.png"></figure>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </figure>
                    <p style="text-align:justify;"><span style="font-size:17px;">According to the Law, Air FPT reserves the right to request for security scanning of passenger and their belongings to ensure passengers and flight safety.</span></p>
                    <p style="text-align:justify;"><span style="color:#005caa;font-size:17px;"><strong>Air FPT </strong></span><span style="font-size:17px;">has the right to take any action that we perceive reasonable, including the confiscation of such items at the request of the Airport Authority after making on-site minutes. We will not be liable for any loss or damage to any prohibited items if they are carried on board despite the prohibition.</span></p>
                    <p><span style="font-size:17px;">Please contact us via <strong>Call Center </strong></span><span style="color:#005CAA;font-size:17px;"><strong>0909109109</strong></span><span style="font-size:17px;"> or Air FPT ticketing Office or Travel Agents for further information.</span></p>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div>
            <form action="{{url('airfpt/manageBooking/boardingpass')}}">
                @foreach($listId as $listId)
                <input type="text" name="{{$listId}}" value="{{$listId}}" style="display: none;">
                @endforeach
                <label for="">I agree</label>
                <input type="checkbox" name="agreement" required>
                <button type="submit" name="" id="" class="btn btn-primary btn-lg btn-block">Continue</button>
            </form>
            <a href="{{url('airfpt/manageBooking/boardingpass')}}">asdsadasd</a>
        </div>
    </div>
</div>
@endsection
