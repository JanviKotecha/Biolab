//DOM elements

const DOMstrings = {
  stepsBtnClass: 'multisteps-form__progress-btn',
  stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
  stepsBar: document.querySelector('.multisteps-form__progress'),
  stepsForm: document.querySelector('.multisteps-form__form'),
  stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
  stepFormPanelClass: 'multisteps-form__panel',
  stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
  stepPrevBtnClass: 'js-btn-prev',
  stepNextBtnClass: 'js-btn-next',
};

//remove class from a set of items
const removeClasses = (elemSet, className) => {
  elemSet.forEach((elem) => {
    elem.classList.remove(className);
  });
};

//return exect parent node of the element
const findParent = (elem, parentClass) => {
  let currentNode = elem;

  while (!currentNode.classList.contains(parentClass)) {
    currentNode = currentNode.parentNode;
  }

  return currentNode;
};

//get active button step number
const getActiveStep = (elem) => {
  return Array.from(DOMstrings.stepsBtns).indexOf(elem);
};

//set all steps before clicked (and clicked too) to active
const setActiveStep = (activeStepNum) => {
  //remove active state from all the state
  removeClasses(DOMstrings.stepsBtns, 'js-active');

  //set picked items to active
  DOMstrings.stepsBtns.forEach((elem, index) => {
    if (index <= activeStepNum) {
      elem.classList.add('js-active');
    }
  });
};

//get active panel
const getActivePanel = () => {
  let activePanel;

  DOMstrings.stepFormPanels.forEach((elem) => {
    if (elem.classList.contains('js-active')) {
      activePanel = elem;
    }
  });

  return activePanel;
};

//open active panel (and close unactive panels)
const setActivePanel = (activePanelNum) => {
  //remove active class from all the panels
  removeClasses(DOMstrings.stepFormPanels, 'js-active');

  //show active panel
  DOMstrings.stepFormPanels.forEach((elem, index) => {
    if (index === activePanelNum) {
      elem.classList.add('js-active');

      setFormHeight(elem);
    }
  });
};

//set form height equal to current panel height
const formHeight = (activePanel) => {
  const activePanelHeight = activePanel.offsetHeight;

  DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;
};

const setFormHeight = () => {
  const activePanel = getActivePanel();

  formHeight(activePanel);
};

// function check(){
//   alert("oh");
// }

//PREV/NEXT BTNS CLICK
DOMstrings.stepsForm.addEventListener('click', (e) => {
  const eventTarget = e.target;

  //check if we clicked on `PREV` or NEXT` buttons
  if (
    !(
      eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) ||
      eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)
    )
  ) {
    return;
  }

  //find active panel
  const activePanel = findParent(
    eventTarget,
    `${DOMstrings.stepFormPanelClass}`
  );

  let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(
    activePanel
  );
  // console.log(activePanelNum);

  //set active step and active panel onclick
  if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
    activePanelNum--;
  } else {
    let fnm = document.getElementById('fnm').value;
    let lnm = document.getElementById('lnm').value;
    let dob = document.getElementById('dob').value;
    let sex = document.getElementById('sex').value;

    let add = document.getElementById('address').value;
    let email = document.getElementById('email').value;
    let city = document.getElementById('city').value;
    let phn = document.getElementById('phn').value;
    let state = document.getElementById('state').value;
    var filter = /^[a-z0-9](\.?[a-z0-9]){1,}@gmail\.com/;
    var phoneno = /^\d{10}$/;

    //let f2=document.getElementById('f2');
    if (fnm == '') {
      alert('Please Enter Your First Name');
    } else if (lnm == '') {
      alert('Please Enter Your Last Name');
    } else if (dob == '') {
      alert('Please Enter Your Date Of Birth');
    } else if (sex == 'sex') {
      alert('Please Enter Your Gender');
    } else if (add == '') {
      alert('Please Enter Your Address');
    } else if (email == '') {
      alert('Please Enter Your Email');
    } else if (!filter.test(email)) {
      alert('Invalid email');
    } else if (city == '') {
      alert('Please Enter Your City');
    } else if (phn == '') {
      alert('Please Enter Your Phone Number');
    } else if (!phoneno.test(phn)) {
      alert('Invalid Phone no');
    } else if (state == '') {
      alert('Please Enter Your State');
    } else if (activePanelNum == 0) {
      activePanelNum++;
    } else if (activePanelNum == 1) {
      activePanelNum++;
    } else if (activePanelNum == 2) {
      let rfs = document.getElementById('rfs').value;
      let sreq = document.getElementById('sreq').value;
      if (rfs == 'Reson for submission') {
        alert('Please Select Reson For Submission');
      } else if (sreq == 'Test Request') {
        alert('Please Select Test Request');
      } else {
        activePanelNum++;
      }
    } else if (activePanelNum == 3) {
      let trm = document.getElementById('trm');
      let psig = document.getElementById('psig').value;
      if (psig == '') {
        alert('Please Do Your Signature');
      } else if (trm.checked == false) {
        alert('You must agree to the terms first.');
        return false;
      } else {
        document.getElementById('hidden').style.display = 'none';
        activePanelNum++;
      }
    }
  }
  setActiveStep(activePanelNum);
  setActivePanel(activePanelNum);
});

//SETTING PROPER FORM HEIGHT ONLOAD
window.addEventListener('load', setFormHeight, false);

//SETTING PROPER FORM HEIGHT ONRESIZE
window.addEventListener('resize', setFormHeight, false);

//changing animation via animation select !!!YOU DON'T NEED THIS CODE (if you want to change animation type, just change form panels data-attr)

const setAnimationType = (newType) => {
  DOMstrings.stepFormPanels.forEach((elem) => {
    elem.dataset.animation = newType;
  });
};

//selector onchange - changing animation
const animationSelect = document.querySelector('.pick-animation__select');

// animationSelect.addEventListener('change', () => {
//   const newAnimationType = animationSelect.value;

//   setAnimationType(newAnimationType);
// });
