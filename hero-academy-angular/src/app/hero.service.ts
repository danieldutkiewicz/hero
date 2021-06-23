import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Hero } from './hero';

@Injectable({
  providedIn: 'root'
})
export class HeroService {

  constructor(
    private http: HttpClient) { }

    private getAllHeroesURL = '/api/heroes';
    private getHeroById = '/api/heroes/';
    private updateHero = '/api/heroes/update/';
    private createNewHeroURL = '/api/heroes/create/';
    private deleteHeroURL = '/api/heroes/delete/';

    httpOptions = {
      headers: new HttpHeaders({ 'Content-Type': 'application/json' })
    };

    getHeroes(): Observable<Hero[]> {
      return this.http.get<Hero[]>(this.getAllHeroesURL);
    }

    getHero(id: number): Observable<Hero> {
      return this.http.get<Hero>(this.getHeroById + id);
    }

    updateHeroName(id: number, newName: string): Observable<Hero> {
      return this.http.put<Hero>(this.updateHero + id + '/' + newName, this.httpOptions);
    }

    addHero(hero: Hero): Observable<Hero> {
      return this.http.post<Hero>(this.createNewHeroURL + hero.name, this.httpOptions);
    }

    deleteHero(hero: Hero): Observable<Hero> {
      return this.http.delete<Hero>(this.deleteHeroURL + hero.id, this.httpOptions);
    }
}
