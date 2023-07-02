

    // Fonction de validation du formulaire
    function validateForm() {
      
     
        var nom = document.getElementById("nom").value;
        var prenom = document.getElementById("prenom").value;
        var age = document.getElementById("age").value;
        var dateNaissance = document.getElementById("dateNaissance").value;
        var email = document.getElementById("email").value;
        var telephone = document.getElementById("telephone").value;
        var photo = document.getElementById("photo").value;
        var promotionId = document.getElementById("promotionId").value;
        var promotionAnnee = document.getElementById("promotionAnnee").value;
      

        // Valider les champs 
       
        if (nom === "") {
            alert("Veuillez saisir le nom.");
            return false; 
        }
        if (prenom === "") {
            alert("Veuillez saisir le prénom.");
            return false;
        }

        if (age === "") {
            alert("Veuillez saisir le prénom.");
            return false;
        }

        if (dateNaissance === "") {
            alert("Veuillez saisir le prénom.");
            return false;
        }

        if (email === "") {
            alert("Veuillez saisir le prénom.");
            return false;
        }
        if (telephone === "") {
            alert("Veuillez saisir le prénom.");
            return false;
        }

        if (photo === "") {
            alert("Veuillez saisir le prénom.");
            return false;
        }

        if (promotionId === "") {
            alert("Veuillez saisir le prénom.");
            return false;
        }

        if (promotionAnnee === "") {
            alert("Veuillez saisir le prénom.");
            return false;
        }
        // Si toutes les validations sont réussies, soumettre le formulaire
        alert("Formulaire soumis avec succès !");
        return true;
    }

    
    var form = document.getElementById("inscriptionForm");
    form.addEventListener("submit", function(event) {
        event.preventDefault(); 
        validateForm(); 
    });

