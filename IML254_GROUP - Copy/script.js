
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


