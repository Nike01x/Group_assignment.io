
function showSection(sectionName, event) {
    // Prevent default anchor behavior
    if (event) {
        event.preventDefault();
    }

    // Hide all sections and employee profiles
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.classList.remove('active');
    });

    // Show the selected section
    const targetSection = document.getElementById(sectionName);
    if (targetSection) {
        targetSection.classList.add('active');
    }

    // Update navigation active state
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.style.color = '#333';
    });
    
    // Highlight current nav item if event exists
    if (event && event.target) {
        event.target.style.color = '#667eea';
    }
}    
async function handleSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    try {
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData
        });
        const result = await response.text();
        alert(result);
        form.reset();
    } catch (error) {
        alert("Error: Could not submit form.");
    }
}    
document.addEventListener('DOMContentLoaded', function() {
    // Add hover effect to template categories
    const categories = document.querySelectorAll('.template-category');
    categories.forEach(category => {
        category.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        category.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });

    // Add smooth scrolling animation for section transitions
    const navLinks = document.querySelectorAll('.nav-links a');
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Add a subtle fade effect
            document.body.style.opacity = '0.95';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 150);
        });
    });

    // Automatically insert today's date as "last updated"
    const lastUpdated = document.getElementById("lastUpdated");
    const today = new Date();
    const formattedDate = today.toLocaleDateString(undefined, {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    });
    lastUpdated.textContent = formattedDate;
});

async function handleCustomSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    try {
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData
        });
        const result = await response.text();
        alert(result);
        form.reset();
    } catch (error) {
        alert("Error: Could not submit form.");
    }
}
// Show/hide custom template type field
document.getElementById('template-type').addEventListener('change', function() {
    const customContainer = document.getElementById('custom-type-container');
    if (this.value === 'other') {
        customContainer.style.display = 'block';
    } else {
        customContainer.style.display = 'none';
    }
});

// Set minimum date for deadline field to tomorrow
document.addEventListener('DOMContentLoaded', function() {
    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 1);
    
    const yyyy = tomorrow.getFullYear();
    const mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
    const dd = String(tomorrow.getDate()).padStart(2, '0');
    
    document.getElementById('deadline').min = `${yyyy}-${mm}-${dd}`;
});

function showEmployeeProfile(employeeId) {
    // Hide all sections
    const sections = document.querySelectorAll('.section');
    sections.forEach(section => {
        section.classList.remove('active');
});
    
    // Show the selected employee profile
    const profileSection = document.getElementById(`employee-${employeeId}`);
    if (profileSection) {
        profileSection.classList.add('active');
    }
    
    // Scroll to top
    window.scrollTo(0, 0);
}

// Add experience field
function addExperienceField(experience = {}) {
    const container = document.getElementById('experience-container');
    const index = container.children.length;
    
    const experienceDiv = document.createElement('div');
    experienceDiv.className = 'experience-entry';
    experienceDiv.style.marginBottom = '1.5rem';
    experienceDiv.style.padding = '1rem';
    experienceDiv.style.border = '1px solid #eee';
    experienceDiv.style.borderRadius = '10px';
    
    experienceDiv.innerHTML = `
        <h4 style="color: #815854; margin-bottom: 1rem;">Position #${index + 1}</h4>
        <div class="form-group">
            <label for="resume-job-title-${index}">Job Title*</label>
            <input type="text" id="resume-job-title-${index}" name="experience[${index}][title]" required value="${experience.title || ''}">
        </div>
        <div class="form-group">
            <label for="resume-company-${index}">Company*</label>
            <input type="text" id="resume-company-${index}" name="experience[${index}][company]" required value="${experience.company || ''}">
        </div>
        <div class="form-group">
            <label for="resume-dates-${index}">Dates of Employment*</label>
            <input type="text" id="resume-dates-${index}" name="experience[${index}][dates]" required placeholder="e.g., Jan 2020 - Present" value="${experience.dates || ''}">
        </div>
        <div class="form-group">
            <label for="resume-description-${index}">Responsibilities & Achievements*</label>
            <textarea id="resume-description-${index}" name="experience[${index}][description]" rows="3" required>${experience.description || ''}</textarea>
        </div>
        <button type="button" class="remove-btn" style="background: #f44336; color: white; padding: 0.3rem 0.8rem; border: none; border-radius: 5px;" onclick="this.parentNode.remove()">Remove</button>
    `;
    
    container.appendChild(experienceDiv);
}

// Add education field
function addEducationField(education = {}) {
    const container = document.getElementById('education-container');
    const index = container.children.length;
    
    const educationDiv = document.createElement('div');
    educationDiv.className = 'education-entry';
    educationDiv.style.marginBottom = '1.5rem';
    educationDiv.style.padding = '1rem';
    educationDiv.style.border = '1px solid #eee';
    educationDiv.style.borderRadius = '10px';
    
    educationDiv.innerHTML = `
        <h4 style="color: #815854; margin-bottom: 1rem;">Education #${index + 1}</h4>
        <div class="form-group">
            <label for="resume-degree-${index}">Degree/Certification*</label>
            <input type="text" id="resume-degree-${index}" name="education[${index}][degree]" required value="${education.degree || ''}">
        </div>
        <div class="form-group">
            <label for="resume-institution-${index}">Institution*</label>
            <input type="text" id="resume-institution-${index}" name="education[${index}][institution]" required value="${education.institution || ''}">
        </div>
        <div class="form-group">
            <label for="resume-edu-dates-${index}">Dates Attended*</label>
            <input type="text" id="resume-edu-dates-${index}" name="education[${index}][dates]" required placeholder="e.g., 2016 - 2020" value="${education.dates || ''}">
        </div>
        <div class="form-group">
            <label for="resume-edu-details-${index}">Details (optional)</label>
            <textarea id="resume-edu-details-${index}" name="education[${index}][details]" rows="2">${education.details || ''}</textarea>
        </div>
        <button type="button" class="remove-btn" style="background: #f44336; color: white; padding: 0.3rem 0.8rem; border: none; border-radius: 5px;" onclick="this.parentNode.remove()">Remove</button>
    `;
    
    container.appendChild(educationDiv);
}

// Handle resume form submission
async function handleResumeSubmit(event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    try {
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData
        });
        const result = await response.text();
        alert(result);
        form.reset();
    } catch (error) {
        alert("Error: Could not submit form. Please try again.");
    }
}

// Add initial fields when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Add one experience and one education field by default
    addExperienceField();
    addEducationField();
});

