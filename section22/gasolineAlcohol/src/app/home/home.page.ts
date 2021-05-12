import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  public result: String = "Result"
  public alcoholPrice :  string = ''
  public gasolinePrice : string = ''

  constructor() {}

  calculate() {

    // validate that the fields have been filled
    if( this.alcoholPrice && this.gasolinePrice) {

      var aPrice = parseFloat(this.alcoholPrice)
      var gPrice = parseFloat(this.gasolinePrice)

      // If the result is> = 0.7, then it is better to use gasoline, 
      // if not, it is better to use alcohol.
      var res = aPrice / gPrice
      if(res >= 0.7) {
        this.result = "It is better to use Gasoline"
      } else {
        this.result = "It is better to use Alcohol"
      }

    } else {
      this.result = "Fill in the fields correctly!"
    }
  }

}
