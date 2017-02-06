function PopulatePrograms() {

   var LocationList = document.contact.campus;
   
   // Clear out the list of teams
   ClearOptions(document.contact.program);
   
   if (LocationList[LocationList.selectedIndex].value == "Online") {
      	AddToOptionList(document.contact.program, '', "Please select your preferred program");
		AddToOptionList(document.contact.program, "Personal Trainer Diploma Program", "Personal Trainer Diploma");
    	AddToOptionList(document.contact.program, "Security and Investigation Specialist Diploma Program", "Security & Investigation Diploma");
		AddToOptionList(document.contact.program, "Business Administration and Management Associate of Applied Science Degree Program" , "Business Administration and Management Associate");
		AddToOptionList(document.contact.program, "Criminal Justice Associate of Applied Science Degree Program", "Criminal Justice Associate");
		AddToOptionList(document.contact.program, "Exercise Specialist Associate of Applied Science Degree Program", "Exercise Specialist Associate");
		AddToOptionList(document.contact.program, "Healthcare Administration Associate of Applied Science Degree Program" , "Healthcare Administration Associate");
		AddToOptionList(document.contact.program, "Medical Billing and Coding Associate of Applied Science Degree Program" , "Medical Billing & Coding Associate");
		AddToOptionList(document.contact.program, "Allied Health Management Bachelor of Science Degree Program" , "Allied Health Management Bachelor");
    	AddToOptionList(document.contact.program, "Business Administration Bachelor of Science Degree Program", "Business Administration Bachelor");
		AddToOptionList(document.contact.program, "Master of Business Administration", "Masters of Business Administration");
   }

   if (LocationList[LocationList.selectedIndex].value == "Columbia") {
      AddToOptionList(document.contact.program, '', "Please select your preferred program");
   	  	AddToOptionList(document.contact.program, "Business Administration Diploma Program" , "Business Administration Diploma");
		AddToOptionList(document.contact.program, "Computer Networking Specialist Diploma Program", "Computer Network Specialist Diploma");
		AddToOptionList(document.contact.program, "Medical Assistant Diploma Program", "Medical Assistant Diploma");
		AddToOptionList(document.contact.program, "Medical Office Assistant Diploma Program" , "Medical Office Assistant Diploma");
		AddToOptionList(document.contact.program, "Security and Investigation Specialist Diploma Program", "Security & Investigation Diploma");	
		AddToOptionList(document.contact.program, "Business Administration and Management Associate of Applied Science Degree Program" , "Business Administration and Management Associate");
    	AddToOptionList(document.contact.program, "Computer Information Systems - Networking Associate of Applied Science Degree Program", "Computer Information Systems - Networking Associate");
		AddToOptionList(document.contact.program, "Criminal Justice Associate of Applied Science Degree Program", "Criminal Justice Associate");
		AddToOptionList(document.contact.program, "Healthcare Administration Associate of Applied Science Degree Program" , "Healthcare Administration Associate");
    	AddToOptionList(document.contact.program, "Medical Administrative Specialist Associate of Applied Science Degree Program", "Medical Administrative Specialist Associate");
		AddToOptionList(document.contact.program, "Medical Assistant Associate of Applied Science Degree Program", "Medical Assistant Associate");
   }
   
   if (LocationList[LocationList.selectedIndex].value == "Springfield") {
      	AddToOptionList(document.contact.program, '', "Please select your preferred program");
    	AddToOptionList(document.contact.program, "Computer Networking Specialist Diploma Program", "Computer Network Specialist Diploma");
		AddToOptionList(document.contact.program, "Medical Assistant Diploma Program", "Medical Assistant Diploma");
		AddToOptionList(document.contact.program, "Medical Office Assistant Diploma Program" , "Medical Office Assistant Diploma");
    	AddToOptionList(document.contact.program, "Personal Trainer Diploma Program", "Personal Trainer Diploma");
		AddToOptionList(document.contact.program, "Security and Investigation Specialist Diploma Program", "Security & Investigation Diploma");
		AddToOptionList(document.contact.program, "Business Administration and Management Associate of Applied Science Degree Program" , "Business Administration and Management Associate");
    	AddToOptionList(document.contact.program, "Computer Information Systems - Networking Associate of Applied Science Degree Program", "Computer Information Systems - Networking Associate");
		AddToOptionList(document.contact.program, "Criminal Justice Associate of Applied Science Degree Program", "Criminal Justice Associate");
		AddToOptionList(document.contact.program, "Exercise Specialist Associate of Applied Science Degree Program", "Exercise Specialist Associate");
   	  	AddToOptionList(document.contact.program, "Healthcare Administration Associate of Applied Science Degree Program" , "Healthcare Administration Associate");
    	AddToOptionList(document.contact.program, "Medical Administrative Specialist Associate of Applied Science Degree Program", "Medical Administrative Specialist Associate");
		AddToOptionList(document.contact.program, "Medical Assistant Associate of Applied Science Degree Program", "Medical Assistant Associate");
		AddToOptionList(document.contact.program, "Medical Billing and Coding Associate of Applied Science Degree Program" , "Medical Billing & Coding Associate");
		AddToOptionList(document.contact.program, "Allied Health Management Bachelor of Science Degree Program" , "Allied Health Management Bachelor");
    	AddToOptionList(document.contact.program, "Business Administration Bachelor of Science Degree Program", "Business Administration Bachelor");
		AddToOptionList(document.contact.program, "Master of Business Administration", "Masters of Business Administration");
   }

   if (LocationList[LocationList.selectedIndex].value == "Rogers") {
      AddToOptionList(document.contact.program, "", "Please select your preferred program");
   	  	AddToOptionList(document.contact.program, "Business Administration Diploma Program" , "Business Administration Diploma");
    	AddToOptionList(document.contact.program, "Computer Networking Specialist Diploma Program", "Computer Network Specialist Diploma");
		AddToOptionList(document.contact.program, "Medical Assistant Diploma Program", "Medical Assistant Diploma");
		AddToOptionList(document.contact.program, "Medical Office Assistant Diploma Program" , "Medical Office Assistant Diploma");
    	AddToOptionList(document.contact.program, "Personal Trainer Diploma Program", "Personal Trainer Diploma");
		AddToOptionList(document.contact.program, "Security and Investigation Specialist Diploma Program", "Security & Investigation Diploma");
		AddToOptionList(document.contact.program, "Business Administration and Management Associate of Applied Science Degree Program" , "Business Administration and Management Associate");
    	AddToOptionList(document.contact.program, "Computer Information Systems - Networking Associate of Applied Science Degree Program", "Computer Information Systems - Networking Associate");
		AddToOptionList(document.contact.program, "Criminal Justice Associate of Applied Science Degree Program", "Criminal Justice Associate");
		AddToOptionList(document.contact.program, "Exercise Specialist Associate of Applied Science Degree Program", "Exercise Specialist Associate");
   	  	AddToOptionList(document.contact.program, "Healthcare Administration Associate of Applied Science Degree Program" , "Healthcare Administration Associate");
    	AddToOptionList(document.contact.program, "Medical Administrative Specialist Associate of Applied Science Degree Program", "Medical Administrative Specialist Associate");
		AddToOptionList(document.contact.program, "Medical Assistant Associate of Applied Science Degree Program", "Medical Assistant Associate");
		AddToOptionList(document.contact.program, "ESL", "Learn to Speak English - ESL Courses");
   }
   if (LocationList[LocationList.selectedIndex].value == "Topeka") {
      AddToOptionList(document.contact.program, "", "Please select your preferred program");
    	AddToOptionList(document.contact.program, "Business Administration Diploma Program" , "Business Administration Diploma");
    	AddToOptionList(document.contact.program, "Computer Networking Specialist Diploma Program", "Computer Network Specialist Diploma");
		AddToOptionList(document.contact.program, "Medical Assistant Diploma Program", "Medical Assistant Diploma");
		AddToOptionList(document.contact.program, "Medical Office Assistant Diploma Program" , "Medical Office Assistant Diploma");
		AddToOptionList(document.contact.program, "Security and Investigation Specialist Diploma Program", "Security & Investigation Diploma");
		AddToOptionList(document.contact.program, "Business Administration and Management Associate of Applied Science Degree Program" , "Business Administration and Management Associate");
    	AddToOptionList(document.contact.program, "Computer Information Systems - Networking Associate of Applied Science Degree Program", "Computer Information Systems - Networking Associate");
		AddToOptionList(document.contact.program, "Criminal Justice Associate of Applied Science Degree Program", "Criminal Justice Associate");
		AddToOptionList(document.contact.program, "Healthcare Administration Associate of Applied Science Degree Program" , "Healthcare Administration Associate");
		AddToOptionList(document.contact.program, "Heating Ventilation Air Conditioning and Refrigeration Technology Associate of Applied Science Degree Program", "HVAC & Refrigeration Technology Associate");
		AddToOptionList(document.contact.program, "Heating, Ventilation, Air Conditioning and Refrigeration Diploma Program", "HVAC & Refrigeration Technology Diploma");
    	AddToOptionList(document.contact.program, "Medical Administrative Specialist Associate of Applied Science Degree Program", "Medical Administrative Specialist Associate");
		AddToOptionList(document.contact.program, "Medical Assistant Associate of Applied Science Degree Program", "Medical Assistant Associate");
		AddToOptionList(document.contact.program, "Medical Billing and Coding Associate of Applied Science Degree Program" , "Medical Billing & Coding Associate");	
	}   
}


function ClearOptions(OptionList) {

   // Always clear an option list from the last entry to the first
   for (x = OptionList.length; x >= 0; x = x - 1) {
      OptionList[x] = null;
   }
}


function AddToOptionList(OptionList, OptionValue, OptionText) {
   // Add option to the bottom of the list
   OptionList[OptionList.length] = new Option(OptionText, OptionValue);
}






