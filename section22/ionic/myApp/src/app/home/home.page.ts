import { Component } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage {

  public title : String = "My First App"
  public randomImage : String = "https://source.unsplash.com/random/800x600"

  public localImage : String = "../assets/icon-mobile.png"

  constructor() {}
 
  public update(): void {
    this.title = "Changed text"
  }

  public action(): void {
    this.title = "Clicked button"
  }

}
