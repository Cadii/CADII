import {initializeApp} from 'firebase/app';
import {getAuth} from 'firebase/auth';
import {getFirestore} from 'firebase/firestore';

const firebaseConfig = initializeApp( {
    apiKey: "AIzaSyAPWobt9P66PXOFjFRDqLDI0neIOxV41mw",
    authDomain: "cadii-cf806.firebaseapp.com",
    projectId: "cadii-cf806",
    storageBucket: "cadii-cf806.appspot.com",
    messagingSenderId: "1097061015558",
    ppId: "1:1097061015558:web:2eb8c05684582635da2387",
    measurementId: "G-6YP4VJ9KJE"
    });

const auth=getAuth(firebaseConfig);
const DB=getFirestore(firebaseConfig);
console.log("hello");
const UserName= document.getElementById('user_name');
const Password= document.getElementById('password');
const Email= document.getElementById('Email');
const Gender= document.getElementsByTagName('gender');

const database = firebase.database();
const rootref =database.ref('users');

addBtn.addEventListener('click', (e) => 
{
    e.preventDefault();
    const autoID=rootref.push().key;
    rootref.child(autoID).set(
    {
        User_Name: UserName.value,
        E_mail: Email.value,
        Password: Password.value,
        GenDer: Gender.value
    });
});