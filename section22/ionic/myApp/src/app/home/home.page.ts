import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
})
export class HomePage implements OnInit {

  public title : String = "My First App"
  public randomImage : String = "https://source.unsplash.com/random/800x600"
  public localImage : String = "../assets/icon-mobile.png"
  public result : String = ""
  public search : String = ""

  constructor(private navigation: NavController) {}

  ngOnInit() {
  }

  retrieve() {
    this.result = this.search
  } 

  openButtons() {
    this.navigation.navigateForward('buttons')
  } 
 
  public update(): void {
    this.title = "Changed text"
  }

  public action(): void {
    this.title = "Clicked button"
  }

}
