import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.php',
  styleUrl: './app.component.css'
})

export class AppComponent {
  title = 'Eventuro';

  goToSignUp() {
    alert("Yo")
  }
}

