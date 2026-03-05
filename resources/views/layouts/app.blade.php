<script type="module">
    import { initializeApp } from 'https://www.gstatic.com/firebasejs/11.6.0/firebase-app.js';
    import { getFirestore } from 'https://www.gstatic.com/firebasejs/11.6.0/firebase-firestore.js';

    const firebaseConfig = @json(config('services.firebase'));
    const app = initializeApp(firebaseConfig);
    window.db = getFirestore(app);
</script>
