import { Component, OnInit } from '@angular/core';
import { from } from 'rxjs';
import { ServiceService } from '../service.service';

@Component({
  selector: 'app-home-page',
  templateUrl: './home-page.component.html',
  styleUrls: ['./home-page.component.css']
})
export class HomePageComponent implements OnInit {
  UpdateDate: string;
  Source: string;
  Confirmed: number;
  NewConfirmed: number;
  Recovered: number;
  Hospitalized: number;
  Deaths: number;
  constructor(private api:ServiceService) { }

  ngOnInit(): void {
    this.api.getCovidStat().subscribe((response)=>{
      this.UpdateDate = response['UpdateDate'];
      this.Source = response['Source'];
      this.Confirmed = response['Confirmed'];
      this.NewConfirmed = response['NewConfirmed'];
      this.Recovered = response['Recovered'];
      this.Hospitalized = response['Hospitalized'];
      this.Deaths = response['Deaths'];
    }
    );
  }

  refreshPAGE(){
   window.location.reload();
  }

}
