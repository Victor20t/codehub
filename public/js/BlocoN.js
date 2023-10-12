// Acesso a elementos do DOM
const noteContent = document.getElementById("note-content");
const savedNotes = document.getElementById("saved-notes");
const newNoteButton = document.getElementById("new-note");

// Carregue notas salvas do armazenamento local ao carregar a página
loadSavedNotes();

// Event listener para o botão "Salvar"
document.getElementById("save-button").addEventListener("click", function() {
    const content = noteContent.value;
    if (content.trim() !== "") {
        // Adicione a nota à interface do usuário
        addNoteToUI(content);
        // Salve a nota no armazenamento local
        saveNoteToLocalStorage(content);
        // Limpe o campo de entrada de texto
        noteContent.value = "";
    }
});

// Event listener para o botão "Nova Nota"
newNoteButton.addEventListener("click", function() {
    // Limpe o campo de entrada de texto para iniciar uma nova nota
    noteContent.value = "";
});

// Função para carregar notas salvas do armazenamento local
function loadSavedNotes() {
    const savedNotesData = JSON.parse(localStorage.getItem("savedNotes")) || [];
    savedNotesData.forEach(note => {
        // Adicione a nota à interface do usuário
        addNoteToUI(note);
    });
}

// Função para adicionar uma nota à interface do usuário
function addNoteToUI(note) {
    const noteItem = document.createElement("li");
    noteItem.textContent = note;

    const deleteButton = document.createElement("span");
    deleteButton.textContent = "Excluir";
    deleteButton.className = "delete-note";
    deleteButton.addEventListener("click", function() {
        // Exclua a nota do armazenamento local e da interface do usuário
        deleteNoteFromLocalStorage(note);
        savedNotes.removeChild(noteItem);
    });

    noteItem.appendChild(deleteButton);
    savedNotes.appendChild(noteItem);
}

// Função para salvar uma nota no armazenamento local
function saveNoteToLocalStorage(note) {
    const savedNotesData = JSON.parse(localStorage.getItem("savedNotes")) || [];
    savedNotesData.push(note);
    localStorage.setItem("savedNotes", JSON.stringify(savedNotesData));
}

// Função para excluir uma nota do armazenamento local
function deleteNoteFromLocalStorage(note) {
    const savedNotesData = JSON.parse(localStorage.getItem("savedNotes")) || [];
    const index = savedNotesData.indexOf(note);
    if (index !== -1) {
        savedNotesData.splice(index, 1);
        localStorage.setItem("savedNotes", JSON.stringify(savedNotesData));
    }
}
