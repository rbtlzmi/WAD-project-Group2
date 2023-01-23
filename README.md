# <h1> INFO 3305 Project Proposal & Extended Full Report </h1>

**Group 2**
<pre>
ISLAM MUNTAHA 1920920<br>
NUR ALIA BINTI MUHAMMAD 2010884<br>
RABIATUL ADAWIYAH BINTI MOHAMMAD AZMI 2013214<br>
ALYA HUSNA BINTI IBRAHIM 2019748
</pre>
 
*Lecturer Dr. MOHD KHAIRUL AZMI BIN HASSAN*


## Healthcare System

## Introduction and Objectives
When operating any major healthcare centre, registration of patients comes first and foremost. Registration is required in order to provide services of the hospital to the patient and to keep a track of various services that are availed by each patient. This is also the first step to generate a medical record of the patient in which all medical details of the patient are documented.<br>

A newly opened clinic has enlisted the help of this team to create a systematic registration for new patients. Up until now, only manual registration was available to the patients, which resulted in a lot of difficulties in terms of keeping track of patients and the services required by them from the clinic. HealthWeb Systems (HWS) provides a simple and straightforward system for registration to be completed on the web, in order to manage the patients records. The web application would allow for the data to be synced more easily, and minimise loss of data.<br>

HealthWeb Systems conform to the SDGs 3 and 9, which are good health and well-being and industry, innovation and infrastructure respectively. Healthweb Systems will make sure everyone has access to proper health coverage and access to safe and effective medicines and vaccines. With the technological progess, HWS would help the clinic be more interconnected and prosperous through the internet. <br>

## Features and Functionalities
A system's primary components are its features and functionalities. In our system,here are six features and functionalities for our system. 
The details are as follows:
<br>

**1. Registration of the clinic's staff** <br>
First and foremost, this system requires staff members like clinic assistants, nurses, or doctors to register. This is to ensure that all personnel information is preserved for clinic use only. Each clinic has multiple staff such as doctors, so each doctor must have its own information so that doctors can be assigned to their patients accordingly. Thus, registration for staff is necessary for personnel as a result in order to prevent informational confusion.<br>

**2.Log In for Staff** <br>
The staff log-in feature is crucial because it is one of the security features that ensures the staff using the system is legitimate and has been registered with the clinic. By doing this, data theft and other issues that can compromise patient and clinic security can be avoided. Due to this, the log-in feature is essential for ensuring the reliability and security of our system.<br>

**3.Registration for the clinic's patients**<br>
Every clinic needs a reliable registration system to prevent data from the same patient from being duplicated. When opposed to manual registration, the registration function's quality enables data to be kept accurately and without data loss. Patients' information can be carefully preserved so that it is accessible to them whenever they visit the clinic. This will cut down on time spent simultaneously searching and registering.Additionally, it assists in tracking blood type, medical history, and allergies to prevent errors when administering blood or drugs.<br>

**4.Booking patient's appointment through the staff**<br>
Making sure that patients or users can schedule doctor appointments through the staff is one of the characteristics and functionalities of this system. This will make the appointments schedule more structured and convenient to verify and access. It will also ensure that the same doctors are not given duplicate appointments, nor are the same patients given repeat appointments. This function also helps for patients not to come repeatedly to the clinic just to confirm and make their appointmens. Both the clinic's patients and employees will be satisfied aboutt this feature.<br>

**5.Prescription of the drugs given by doctors to patients**<br>
Every time we see the doctor, as is well known, doctors will assign us medication to prescribe. Sometimes, for each appointment, there are various types of drugs given by the doctors for the patients to consume in a specific of time. To ensure that the medication is administered correctly, it is crucial for the staff to maintain track of all prescription medications.As a result, by creating a special function for prescriptions, it enables the clinic to both track the medication's use and identify any issues or illnesses the patient may be experiencing.<br>

**6.Billing and Payment**<br>
Last but not least, after each appointment between patients and doctors, payment will be made after taking the medicine. each customer needs to pay a specific amount for the drugs and services given. Moreover, seniors citizen, insurance, and other discounts are available to patients Therefore, it is preferable to keep payment and invoicing information in case it becomes necessary at a later date.<br>
>

## Entity Relationship Diagram
![Healthcare ERD](https://user-images.githubusercontent.com/121216138/209545894-86056c12-0fe2-4fd5-a927-596bddeda491.png)
 
The Entity Relationship Diagram(ERD) displayed above consists of Entities which are Staff, Patient,Appointment, Prescription and Billing. Every entity has their own unique primary key, some might have foreign keys and other attributes which applies to them. The ERD also shows the relationship between each entities which includes the multiplicity for each relationship. <br>
 
 To summarize the Healthcare System Relationship between Entities, one Staff can register one to many Patients. One Staff can also give prescription to zero to multiple patients. One Patient can make one to multiple Appointment. Each Appointment will create one Prescription for one Patient and Appointment will also generate Billing for one Patient.
 
 

## Sequence Diagram
![INFO3305 (5)](https://user-images.githubusercontent.com/107701670/213920772-ecd20e91-fe47-4d61-bc71-06995873656f.jpg)

Unregistered staff must first register in the system, whereas registered or existing staff can go directly to the login page to log in to the system. Patients must give the staff certain information when they get a new patient in order to register them in the system, such as their name. The staff will then schedule a time with the doctor based on the availability. For user safety reasons, the professionals will always prescribe new drugs or medications at appointments, thus the system must be maintained with all the relevant information. Finally, the staff will provide the patients' billing statement.

## Project System Captured and Explanation

**1. Register Staff and Login Page for Authentication** <br>
The staff must enter a number of items of data on our registration page in order to log in to the system. Name, email and password for authentication, IC number, phone number, address, and type of staff (doctor, regular staff, etc.) are just a few of the details required. Once the registration is complete, the employees can log in to the system by going to the login page. They need to fill in their email and password registered on the login page.   All records for staff can be seen on the staff page once the staff has already been entered into the system.<br>

**2. Register Patient and List of Patients Page** <br>
Staff members must fill out a variety of patient information before they may register a patient, including the patient's name, IC number, email, phone number, address, blood type, weight, height, and any pertinent medical history (relevant). To ensure that all patient records are saved for future use, this information is required. The patient list will be displayed in tables when the staff has finished registering the patients so they can maintain track of their patients' records.<br>

**3. Set a new appointment and List of Appointments Page** <br>
Staff must use the appointment page to schedule new appointments for patients based on availability. The staff must enter the patient's ID, the name of the attending doctor, the date, and the time for the appointment. To avoid having duplicate information for other patients who want to schedule an appointment, all of these details are essential when setting a new appointment. To maintain track of their appointment records, a list of appointments is provided after the appointment is made.<br>

**4. Prescription and List of Prescriptions** <br>
The prescription page is rather straightforward because it only asks for the patient's ID and the medication that the doctor has prescribed. The staff must manually type the drug because there are several drugs used in the medical industry, making it simpler for them to do so. by themselves. A list of prescriptions is provided once the prescription is issued so that staffs can keep track of their patients' medical history and medication given. <br>

**5. Billing Payment and List of Payments** <br>
Billing and payment is usually completed after treatment is received by the patient at the clinic. Clinic billing includes the doctor's service and the medicine given. Each patient has their preferred payment method, therefore a choice of payment method is provided.To determine whether the patient has paid for their treatment or not, staff are also required to fill out the payment status. The invoice title is also provided so that the staff can use the billing receipt as a reference later on, for example calculating the clinic's profit and so on. Once the staff has done registering the patients' bills, the billing list will be shown in tables so they may keep track of their payment history. <br>

**5. Database in MySQL** <br>
All information submitted using this system will be kept in our MySQL database. This is crucial to ensure that no data is lost and that staff can instantly retrieve patient data, for example. As opposed to manual registration, all data will be retained securely and there won't be any data loss in the future. <br>

## Challenges and Difficulties To Develop this Application
We encountered a lot of difficulties when developing this healthcare application. One of them is an error caused by our oversights, such as failing to capitalise certain terms, omitting to include certain symbols, or failing to update our routing code to match the new controllers. As a result, our modules become inaccessible, and it takes us a while to find every error. In addition, introducing more features like the update delete button and similar ones presents challenges. After consulting online resources, we ultimately had to improvise our code to make it function. This taught us to maintain our composure and continually try new things in order to come up with excellent and appropriate solutions for our project. Despite the numerous issues and challenges we encountered, we eventually managed to come up with a solution and were able to finish each module. We really appreciate one another's cooperation in developing our healthcare system applications.
