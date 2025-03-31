@extends('listevisiteur')
@section('contenu2')

    <div class="encadre">
        <h2>Informations du visiteur : </h2>

        <table class="listeLegere">
            <thead>
                <tr>
                    <th>id Visiteur</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse postal</th>
                    <th>Code postal</th>
                    <th>Ville</th>
                    <th>Date d'embauche</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($v as $V)
                <tr>
                    <td>{{$V['id']}}</td>
                    <td>{{$V['nom']}}</td>
                    <td>{{$V['prenom']}}</td>
                    <td>{{$V['adresse']}}</td>
                    <td>{{$V['cp']}}</td>
                    <td>{{$V['ville']}}</td>
                    <td>{{$V['dateEmbauche']}}</td>
                    <td><a onclick="confirm('voulez-vous vraiment supprimer cet utilisateur ?')" href="{{ route('chemin_supprimerVisiteur',['id' => $V['id'] ]) }}">suppression</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection