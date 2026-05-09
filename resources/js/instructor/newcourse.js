
document.addEventListener('DOMContentLoaded', () => {
    const levelsInput = document.getElementById('levels');
    
    if (levelsInput) {
      
        levelsInput.addEventListener('input', generateLevelFields);
    }
});

function generateLevelFields() {
    const levelsInput = document.getElementById("levels");
    const levelContainer = document.getElementById("level-container");
    const levels = levelsInput.value;
    

    levelContainer.innerHTML = '';

    if (levels < 1) return;

    for (let i = 1; i <= levels; i++) {
        const levelDiv = document.createElement("div");
        levelDiv.classList.add("level-box", "glass-panel-inner");
  
        levelDiv.style.animationDelay = `${i * 0.1}s`;

   
        const levelTitle = document.createElement("h3");
        levelTitle.innerHTML = `<i class="fa-solid fa-layer-group"></i> Cápsula de Nivel ${i}`;
        levelDiv.appendChild(levelTitle);


        levelDiv.appendChild(createLabel(`level-title-${i}`, `Nombre del Módulo ${i}`));
        levelDiv.appendChild(createInput("text", `level_title_${i}`, `level-title-${i}`, "Ej: Teoría de Color Avanzada"));


        levelDiv.appendChild(createLabel(`level-video-${i}`, "Transmisión de Video (MP4)"));
        levelDiv.appendChild(createInput("file", `level_video_${i}`, `level-video-${i}`));

   
        levelDiv.appendChild(createLabel(`level-content-${i}`, "Especificaciones Técnicas"));
        const contentInput = document.createElement("textarea");
        contentInput.name = `level_content_${i}`;
        contentInput.id = `level-content-${i}`;
        contentInput.placeholder = "Detalla el conocimiento de este nivel...";
        levelDiv.appendChild(contentInput);

      
        levelDiv.appendChild(createLabel(`level-attachments-${i}`, "Material de Soporte (PDF/ZIP)"));
        levelDiv.appendChild(createInput("file", `level_attachments_${i}`, `level-attachments-${i}`));
        
        levelContainer.appendChild(levelDiv);
    }
}

// Auxiliares para no ensuciar el código
function createLabel(id, text) {
    const label = document.createElement("label");
    label.setAttribute("for", id);
    label.innerText = text;
    return label;
}

function createInput(type, name, id, placeholder = "") {
    const input = document.createElement("input");
    input.type = type;
    input.name = name;
    input.id = id;
    if (placeholder) input.placeholder = placeholder;
    return input;
}


document.getElementById('course-form').addEventListener('submit', function (event) {
    const validations = [
        { id: 'course-title', msg: 'El nombre de la misión es vital para el radar.' },
        { id: 'course-category', msg: 'Debes asignar un sector (categoría) de vuelo.' },
        { id: 'course-description', msg: 'La bitácora de misión no puede estar vacía.' },
        { id: 'levels', msg: 'Define al menos una cápsula de nivel.', min: 1 },
        { id: 'course-price', msg: 'El costo de la misión debe estar configurado.', min: 0 }
    ];

    let errors = [];

    if (document.getElementById('course-image').files.length === 0) {
        errors.push("Carga un identificador visual para la portada.");
    }

    validations.forEach(v => {
        const el = document.getElementById(v.id);
        if (el && (el.value.trim() === '' || (v.min !== undefined && el.value < v.min))) {
            errors.push(v.msg);
        }
    });

    if (errors.length > 0) {
        event.preventDefault();
        alert("⚠ Error en Sistemas:\n\n" + errors.join('\n'));
    }
});