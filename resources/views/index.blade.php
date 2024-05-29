@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                VOUS POUVEZ ÊTRE UN DÉVELOPPEUR CHEZ NOUS, PAS D'AUTRES 
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    AUTRES
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
            AVEC NOUS, VOUS POUVEZ ÊTRE UN DÉVELOPPEUR PRO !
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
            IL Y A CERTAINS BLOGS PEUVENT VOUS AIDER À ÊTRE DÉVELOPPEUR
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
            EN UN CLIC, VÉRIFIEZ-LE !
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                AUTRES
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
        NOUS SOMMES UN DÉVELOPPEUR AIDE LES AUTRES À ÊTRE UN DÉVELOPPEUR DANS ...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
        UX DESIGN
        </span>
        <span class="font-extrabold block text-4xl py-1">
        GESTION DE PROJET
        </span>
        <span class="font-extrabold block text-4xl py-1">
        SÉCURITÉ
        </span>
        <span class="font-extrabold block text-4xl py-1">
            BACKEND ET FRONTEND
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            BLOG
        </span>

        <h2 class="text-4xl font-bold py-10">
        DERNIERS POSTES
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    REACTJS
                </span>

                <h3 class="text-xl font-bold py-10">
                React.js, plus communément appelé React, est une bibliothèque JavaScript gratuite et open source. Il est préférable de créer des interfaces utilisateur en combinant des sections de code (composants) dans des sites Web complets. Construit à l'origine par Facebook, Meta et la communauté open source le maintiennent désormais. L’un des avantages de React est que vous pouvez l’utiliser autant ou aussi peu que vous le souhaitez ! Par exemple, vous pouvez créer l'intégralité de votre site dans React ou simplement utiliser un seul composant React sur une seule page.
            </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    AUTRES
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection