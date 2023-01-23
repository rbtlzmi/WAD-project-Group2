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
![INFO 2305_ERD](https://user-images.githubusercontent.com/121216138/214041160-4f9f424a-39c7-41de-b0a9-887bedd575a4.png)

 
The Entity Relationship Diagram(ERD) displayed above consists of Entities which are Staff, Patient,Appointment, Prescription and Billing. Every entity has their own unique primary key, some might have foreign keys and other attributes which applies to them. The ERD also shows the relationship between each entities which includes the multiplicity for each relationship. <br>
 
 To summarize the Healthcare System Relationship between Entities, one Staff can register one to many Patients. One Staff can also give prescription to zero to multiple patients. One Patient can make one to multiple Appointment. Each Appointment will create one Prescription for one Patient and Appointment will also generate Billing for one Patient.
 
 

## Sequence Diagram
![INFO3305 (5)](https://user-images.githubusercontent.com/107701670/213920772-ecd20e91-fe47-4d61-bc71-06995873656f.jpg)

Unregistered staff must first register in the system, whereas registered or existing staff can go directly to the login page to log in to the system. Patients must give the staff certain information when they get a new patient in order to register them in the system, such as their name. The staff will then schedule a time with the doctor based on the availability. For user safety reasons, the professionals will always prescribe new drugs or medications at appointments, thus the system must be maintained with all the relevant information. Finally, the staff will provide the patients' billing statement.

## Project System Captured and Explanation

**1. Register Staff and Login Page for Authentication** <br>
The staff must enter a number of items of data on our registration page in order to log in to the system. Name, email and password for authentication, IC number, phone number, address, and type of staff (doctor, regular staff, etc.) are just a few of the details required. Once the registration is complete, the employees can log in to the system by going to the login page. They need to fill in their email and password registered on the login page.   All records for staff can be seen on the staff page once the staff has already been entered into the system.<br>
![REGISTER1](https://user-images.githubusercontent.com/107701670/214005908-c4fa0523-b1f8-456b-8afd-2d1620e3f2cc.png)
![REGISTER2](https://user-images.githubusercontent.com/107701670/214006008-b97ea546-8081-44ca-b2ec-3e68775afd60.png)
![LOGIN](https://user-images.githubusercontent.com/107787584/214107688-b3fe8734-a4ad-4d90-8dea-1d80f995b103.png)
![STAFF LIST](https://user-images.githubusercontent.com/107701670/214006170-407043de-de77-4509-b2f5-8985a5cfdb89.png)


**2. Register Patient and List of Patients Page** <br>
Staff members must fill out a variety of patient information before they may register a patient, including the patient's name, IC number, email, phone number, address, blood type, weight, height, and any pertinent medical history (relevant). To ensure that all patient records are saved for future use, this information is required. The patient list will be displayed in tables when the staff has finished registering the patients so they can maintain track of their patients' records.<br>
![ADD PATIENT](https://user-images.githubusercontent.com/107701670/214006417-d42c0dc6-838d-46d4-b206-455607320671.png)
![PATIENT LIST](https://user-images.githubusercontent.com/107701670/214006431-f8e3a20d-6882-4454-9d6c-6506dc4ed156.png)

**3. Set a new appointment and List of Appointments Page** <br>
Staff must use the appointment page to schedule new appointments for patients based on availability. The staff must enter the patient's ID, the name of the attending doctor, the date, and the time for the appointment. To avoid having duplicate information for other patients who want to schedule an appointment, all of these details are essential when setting a new appointment. To maintain track of their appointment records, a list of appointments is provided after the appointment is made.<br>
![ADD APPOINTMENT](https://user-images.githubusercontent.com/107701670/214006609-0ad5c8f1-ef52-4729-aa90-51e2f96aaca4.png)
![ADD APPOINTMENT DROPDOWN SELECT PATIENT](https://user-images.githubusercontent.com/107701670/214006628-9f9f389b-0aa2-4ccc-a344-8e34be374da0.png)
![ADD APPOINTMENT DROPDOWN SELECT DOCTOR](https://user-images.githubusercontent.com/107701670/214006640-3c4a640e-787e-4c4f-a69e-57ec6a1cf1f7.png)
![APPOINTMENT LIST](https://user-images.githubusercontent.com/107701670/214006688-b2035845-e4e2-4562-af02-644783e13aa9.png)

**4. Prescription and List of Prescriptions Page** <br>
The prescription page is rather straightforward because it only asks for the patient's ID and the medication that the doctor has prescribed. The staff must manually type the drug because there are several drugs used in the medical industry, making it simpler for them to do so. by themselves. A list of prescriptions is provided once the prescription is issued so that staffs can keep track of their patients' medical history and medication given. <br>
![ADD PRESCRIPTION](https://user-images.githubusercontent.com/107701670/214006812-ff69fa49-8681-42a3-bef8-565a7b1cb533.png)
![ADD PRESCRIPTION DROPDOWN SELECT PATIENT](https://user-images.githubusercontent.com/107701670/214006830-d9724703-511f-480d-8fe9-5e5a3e8a8fee.png)
![PRESCRIPTION LIST](https://user-images.githubusercontent.com/107701670/214006936-3853dc09-637f-46c5-b7df-de590f493123.png)

**5. Billing Payment and List of Payments Page** <br>
Billing and payment is usually completed after treatment is received by the patient at the clinic. Clinic billing includes the doctor's service and the medicine given. Each patient has their preferred payment method, therefore a choice of payment method is provided.To determine whether the patient has paid for their treatment or not, staff are also required to fill out the payment status. The invoice title is also provided so that the staff can use the billing receipt as a reference later on, for example calculating the clinic's profit and so on. Once the staff has done registering the patients' bills, the billing list will be shown in tables so they may keep track of their payment history. <br>
![ADD BILLING](https://user-images.githubusercontent.com/107701670/214007089-c2372cea-7871-4be8-9496-4dd18021882d.png)
![ADD BILLING DROPDOWN SELECT PATIENT](https://user-images.githubusercontent.com/107701670/214007133-14f92968-432f-4233-a241-55b8cabbbb08.png)
![ADD BILLING DROPDOWN PAYMENT METHOD](https://user-images.githubusercontent.com/107701670/214007181-8a880255-2166-4bb5-a4f8-c6644ed4c0f5.png)
![ADD BILLING DROPDOWN PAYMENT STATUS](https://user-images.githubusercontent.com/107701670/214007154-abc3ec06-a91f-46ab-8703-ddbaf7385bdf.png)
![BILLING LIST](https://user-images.githubusercontent.com/107701670/214007206-be603cf1-46dc-4db7-aa1a-86af72d4646f.png)

**6. Dashboard Page** <br>
Dashboard page will be shown once the staff already login into the system. It will show the logo and description of our overall system. <br>
![DASHBOARD](https://user-images.githubusercontent.com/107701670/214007704-9c6026fc-6c21-489c-9cb3-d7a49b6a819b.png)

**7. Database in PHPMyAdmin** <br>
All information submitted using this system will be kept in our PHPMyAdmin database. This is crucial to ensure that no data is lost and that staff can instantly retrieve patient data, for example. As opposed to manual registration, all data will be retained securely and there won't be any data loss in the future. <br>
![WhatsApp Image 2023-01-23 at 5 36 49 PM](https://user-images.githubusercontent.com/107701670/214007817-a6a40871-34aa-4657-b0d5-388c2df3f8f7.jpeg)

## Challenges and Difficulties To Develop this Application
We encountered a lot of difficulties when developing this healthcare application. One of them is an error caused by our oversights, such as failing to capitalise certain terms, omitting to include certain symbols, or failing to update our routing code to match the new controllers. As a result, our modules become inaccessible, and it takes us a while to find every error. In addition, introducing more features like the update delete button and similar ones presents challenges. After consulting online resources, we ultimately had to improvise our code to make it function. This taught us to maintain our composure and continually try new things in order to come up with excellent and appropriate solutions for our project. Despite the numerous issues and challenges we encountered, we eventually managed to come up with a solution and were able to finish each module. We really appreciate one another's cooperation in developing our healthcare system applications.
