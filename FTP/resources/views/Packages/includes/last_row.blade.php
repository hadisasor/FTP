@php 
$url = URL::current();
$url = preg_replace('/[^a-zA-Z\']/', "", $url );
// return dd($url);
@endphp

<div class="tabsinfos"><!--tabs of info beginning-->
    <ul class="tabs nav nav-pills mb-3" id="pills-tab" role="tablist">

      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-include-tab" data-bs-toggle="pill" data-bs-target="#pills-include" type="button" role="tab" aria-controls="pills-include" aria-selected="true">Price includes</button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-exclude-tab" data-bs-toggle="pill" data-bs-target="#pills-exclude" type="button" role="tab" aria-controls="pills-exclude" aria-selected="false">Price excludes</button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-child-tab" data-bs-toggle="pill" data-bs-target="#pills-child" type="button" role="tab" aria-controls="pills-child" aria-selected="false">Child pricing</button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-cancel-tab" data-bs-toggle="pill" data-bs-target="#pills-cancel" type="button" role="tab" aria-controls="pills-cancel" aria-selected="false">Cancellation</button>
      </li>

      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-note-tab" data-bs-toggle="pill" data-bs-target="#pills-note" type="button" role="tab" aria-controls="pills-note" aria-selected="false">Special notes</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="pills-note-tab" data-bs-toggle="pill" data-bs-target="#pills-insurance" type="button" role="tab" aria-controls="pills-insurance" aria-selected="false">insurance</button>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-include" role="tabpanel" aria-labelledby="pills-include-tab">
        <ul style="text-align:left;">  
        <li>Provision of Ticket, Hajj Visa & Dras.</li>
        <li>Full board accommodation as mentioned or similar.</li>
        <li>VVIP Tents for Non Shifting Package.</li>
        <li>Mina Tents & Arfaat Tent applicable as per package chosen.</li>
        <li>Sofa Beds in Mina.</li>
        <li>All daily meals : Breakfast, Lunch & Dinner.</li>
        <li>Daily Laundry Service.</li>
        <li>Internal transportaion by Muallim coaches.</ul>
        </div>

      <div class="tab-pane fade" id="pills-exclude" role="tabpanel" aria-labelledby="pills-exclude-tab">
        <ul style="text-align:left;">  
          <li>GST @ 5 % to be borne by passengers.</li>
          <li>Qurbani, however this can be arranged for you upon request></li>
          <li>Transportaon form Mina and Makkah and back on 10 & 11 Zill - Hajj.</li>
          <li>Transportaon form Muzadalifa to Mina on 10 Zill - Hajj.</li>
          <li>Room Service.</li>
         </ul>
          </div>

      <div class="tab-pane fade" id="pills-child" role="tabpanel" aria-labelledby="pills-child-tab">
        <ul style="text-align:left;">  
        <li>Child Between 2 and 12 years - Rs 30,000/- less on any Package chosen.</li>
        </ul>
        </div>

      <div class="tab-pane fade" id="pills-cancel" role="tabpanel" aria-labelledby="pills-cancel-tab">
        <ul style="text-align:left;">  
          <li>On Booking - Rs 100,000/-.</li>
          <li>Before Ramzaan 50% of the total tour amount.</li>
          <li>14 days prior to departure or no show full amount will be charged.</li>
          <li>Once Hajj Visa is issued, Zero Package refund policy applies.</li>
         </ul>
          </div>

      <div class="tab-pane fade" id="pills-note" role="tabpanel" aria-labelledby="pills-note-tab">
        <ul style="text-align:left;">  
          <li>All booking are on tentave basis, subject to Allocaon of Hajj Quota. Final Confirmaon to be given aer allocaon of Haj Quota by Government of india.</li>
          <li>Prices are fixed and non - negoable. All prices quoted are per person based on USD @ Rs 70/- and cket average Calculated @ Rs 65,000/- Any increase in the same shall be borne by the pilgrim. The USD component and the INR component in the package shall be advised at the me of booking.</li>
          <li>Service in Mina and Arafat are governed by the Saudi government and subject to change without prior noce.</li>
          <li>Services like, locaon of Tents, Aached Bathroom Tents, Sofa Beds, etc. can be recalled anyme, even on the day of stay in Mina.</li>
          <li>For Booking, a Inial deposit of Rs 200,000 per person is required out of which Rs 100,000 will be non refundable except for Non Shiing Package where Rs 200,000 is non refundable. Balance shall be payable as per terms agreed.</li>
          <li>Addional service can be obtained on demand like VIP Tents, Haram View rooms, junior Suites, Senior Suite, Qurbani, Wheel Chair escorts, priority handling at jeddah airport etc. prices for Addional service shall be advised upon request.</li>
          <li>All stated dates and ineraries are provisional and subject to confirmaon at the me of booking, dates may vary plus/ minus a day or two on account of factors like, the Hijri Calendar dates, flight allotments etc. in the event of change in Hijri Calendar dates, accommodaon may be provided at any available Hotel and not necessarily those listed on your contract, thus accommodaon may be given in hotel menoned or similar category may be given.</li>
          <li>Reporng me for Haj flight, Indian airport is 5 hour before the flight departure and for Saudi airport in 8-10 hours before departure.</li>
          <li>Standard free baggage allowance in economy class is 2 pieces of luggage of maximum 23 kg. each excess baggage will aract addional charges by the airline</li>

          </ul>
          </div>
          <div class="tab-pane fade" id="pills-insurance" role="tabpanel" aria-labelledby="pills-note-tab">
        <ul style="text-align:left;">  
          <li>.</li>
          <li>..</li>
          <li>...</li>
          <li>....</li>
          <li>.....</li>
          <li>......</li>
          <li>.......</li>
          <li>........</li>
          <li>.........</li>

          </ul>
          </div>
    </div>

    </div><!--tabs of info Ending-->




  