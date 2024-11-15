import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from '.src/app/app.component.html';
import { SignUpComponent } from './sign-up/sign-up.component';
import { EventsComponent } from './events/events.component';

const routes: Routes = [
  { path: 'src/app/app.component.html', component: HomeComponent },  // Default route
  { path: 'src/app/app.login.html', component: SignUpComponent },
  { path: 'src/app/app.signup.html', component: EventsComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

