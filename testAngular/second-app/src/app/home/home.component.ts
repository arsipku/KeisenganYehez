import { SuperHero } from './superheros';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {

  id: number;

  weapons = ['Iron Suit', 'Hammer', 'Bow and Arrow', 'Shield', 'Raw Power'];

  specialities = ['Technology', 'God of Thunder', 'Archery', 'War & Leadership', 'Scientist'];

  model = new SuperHero(1, "Iron Man", this.weapons[0], this.specialities[0], "Tony Stark");

  submitted = false;

  ngOnInit() {
    this.id = 0;
  }

  //logic ketika submit form
  onSubmit() {
    this.submitted = true;
    console.log('this.model.name ' + this.model.name);
    console.log('this.model.weapon ' + this.model.weapon);
    console.log('this.model.speciality ' + this.model.speciality);
  }

  //reset form ketika klik New SuperHero
  newSuperHero() {
    this.id = this.id + 1;
    this.model = new SuperHero(this.id, '', '', '');
  }
}
