import React from 'react'
import './home.css';

export default function home() {
  return (
    <main>
       <section className='my-5'>
         <div className='container'>
      <h2 className='title'> Welcome to WebSite Konvertimi Monetar</h2>
         <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
       <strong> Website Info </strong> 
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Ky website mundëson këmbimin e njësive monetare të disa shteteve duke u bazuar në Normat e Këmbimit që publikohen nga Banka Qendrore Europiane.
          Te dhenat azhurnohen per cdo dite permes CurrencyConverter API dhe fixer.io API. </strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <b> Cka eshte Kembimi Monetar(Currency Exchance)?</b>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Kembimi Monetar nënkupton shëndrrimin e njësisë monetare kombtare me njësi monetare të ndonjë vendi tjetër.Këmbimi Monetar ndërmjet parave të vendeve të ndryshme kryhet përmes Normës së Këmbimit Monetar( Currency Exchange Rate). 
 </strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <b> Çka është Norma e Këmbimit Monetar(Currency Exchange Rate)?.</b>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>  Norma e Këmbimit (Currency Exchange Rate) nënkupton çmimin e njësisë monetare vendore të shprehur në njësi monetare të vendit tjetër apo të ndonjë valute të fortë. Për t'u shëndrruar në  njësi monetare të huaj, si Normë Krahasuese merren valutat stabile siç është Dollari Amerikan (USD) apo Euro e Unionit European (EUR).</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
     <b>Çka është Norma Këmbimit Bazë(Base Currency Exchance)? </b>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>  Norma Bazë e Këmbimit shpreh vlerën apo çmimin e parasë së vendit me të cilin mund te këmbehet 1 (një njësi monetare) e vendit tjetër. Secila para e shteteve e shpreh çmimin e këmbimit të valutes së vet për një Dollar amerikan apo për një Euro. 
          Shembull:  1 (USD) dollar amerikan kembehet me 111.2 Lek Shqiptar (ALL) 
				1(USD) = 111.2 (ALL)
 .</strong>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      <strong> Çka është Këmbimi Monetar sipas Shumës (Amount Currency Exchance)? </strong>
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong> Këmbimi Monetar sipas shumës ndodh kur kemi një sasi më të madhe parash dhe dëshirojmë t’i shëndrrojmë në para të ndonjë vendi tjetër. Poashtu çmimi shprehet në normën bazëm d.m.th për një njësi, vetëm se dallon shuma që do të këmbehet. .</strong>
      </div>
    </div>
  </div>
  
</div>
     </div>
       </section>

    </main>
  )
}
