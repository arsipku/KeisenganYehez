import { VotingComponent } from './voting/voting.component';
import { HomeComponent } from './home/home.component';
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';


//Deklarasi Routing untuk perpindahan halaman
const routes: Routes = [
  {path: '', component: HomeComponent},
  {path: 'voting', component: VotingComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
