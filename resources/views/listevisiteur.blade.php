@extends ('sommairegestionnaire')
    @section('contenu1')

    <div class="contenu">

        <h2>Liste des visiteurs</h2>
        <h3>id des visiteurs : </h3>

        <form action=" {{ route('chemin_leVisiteur') }}"> {{ csrf_field() }}

            <div class="corpsForm"><p>

                <label for="visiteur"></label>

                <select name="visiteur" id="visiteur">

                    @foreach($lesVisiteurs as $visiteur)

                    <option selected value="{{ $visiteur['id'] }}">

                        {{ $visiteur['id'] }} {{ $visiteur['nom'] }} {{ $visiteur['prenom'] }}

                    </option>

                    @endforeach

                </select>
                </p>
            </div>    

            <p class="piedForm">

                <input type="submit" value="afficher">

            </p>

            
        </form>

            
    </div>
    @endsection