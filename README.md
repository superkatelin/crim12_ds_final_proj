# crim12_ds_final_proj
Crimson 12's Final Project for Data and Systems, IU MSIS Core 2016.

Progress:

Database [==========] 100%
  Started: 10/18
  Completed: 10/19

API [          ] 0%

Project Description:

Alternative Green Systems – Turbine Outage Management
Business Background 
AGS (Alternative Green Systems) build electrical turbines for the green power generation industry. Some of their most profitable projects include their wind and tidal turbines. 
AGS is a world leader in green power generation, with a focus on efficient harnessing of natural energy sources. Today, AGS technology delivers as much as 20% of U.S. electricity through multiple power providers. The company is growing rapidly as the world turns to green sources of energy. 
One of the more profitable trends in energy generation is not simply the sale of turbines, but continuous service contracts. These service contracts are useful for customers, who no longer have to develop expertise in a growing diversity of turbines, and are a major source of revenue for the company. Because of the value of these contracts, multiple original equipment manufacturer (OEM) companies compete for service contracts on each others’ turbines. AGS’s current strategy is to maintain a strong customer focus as a way to continue selling both tidal turbines and service contracts.
Case Background 
Sometimes AGS Turbine Production group will sell a product (e.g. 3R5 Delta tidal turbine) at a loss or for minimal profit. The Turbine Services team will then work closely with the client relations manager to sign a service-level agreement with the customer in order to make up for the profit lost. 
What is a service-level agreement? 
A service-level agreement (SLA) outlines the duration, cost, and terms of service that AGS Turbine Services will provide to the customer for a specific product. The agreement can include upgrades, parts, maintenance & repairs, training, as well as installation and commissioning of new turbines. The SLA details the scope and frequency of this service, and usually includes support if a turbine experiences an outage. 
What is an outage? 
An outage occurs when the product (i.e. a tidal turbine) stops operating as usual. There are two types of outages – planned and unplanned. A planned outage occurs when the customer decides in advance to stop running the turbine in order to perform regular service. Because planned outages are coordinated in advance between the customer and AGS Turbine Services, the customer can plan around power generation needs (demand is usually lowest in the fall/spring) and AGS can plan for labor and tool costs. An unplanned outage occurs when a turbine stops operating unexpectedly. Because this is unplanned, it costs more for the AGS team to plan the labor and tool costs to support the customer during this outage. 
When a turbine unexpectedly stops operating, there is a real-time notification to the Remote Monitoring Stations in Edison, New York and Vancouver, Oregon. The RMS team alerts the service manager (SM) for the customer. The SM then logs the entry in a spreadsheet, and has to coordinate resolving the unplanned maintenance. 
Problem 
When an outage occurs, it’s necessary to dispatch engineers, transport necessary replacement parts, and handle logistics for expensive and sometimes cumbersome tools. Each of these issues can extend the customer’s downtime. The customer’s ability to deliver on power generation needs is adversely impacted and AGS’s costs also balloon, as the profit that AGS expects to earn from the SLA is eaten up by the cost required to recover from an outage on such short notice. Consequently, waiting for a turbine to break before activating maintenance is not an optimal solution.
Proposal 
The SMs need a self-service solution that will allow them to proactively monitor the health of a turbine before getting a notification from the RMS team that an outage has occurred. SMs need to be able to recognize abnormal turbine operation so they can start the outage management process with enough time to optimize cost and ensure a fit between the engineers, tools, and outage.
The RMS team partnered with one of AGS’s customers, Columbia Energy, to install sensors on one of their turbines at a plant at the mouth of the Columbia River between Washington and Oregon. In order to assist the IT team with creating a pilot for this tool, Columbia Energy has provided a sample of the turbine data and key performance indicators (KPIs) derived from the sensors. 
This pilot system should be able to accomplish the following tasks:
1.	Display client company information (Service Managers should be able to create and read notes about the service-level agreement);
2.	Display sites in which each client has the AGS turbines (whether tidal or wind);
3.	Display the turbines for each site;
4.	Record specific KPIs for a given gas turbine located in a client site. 
5.	Record a time series of data for each KPI used in a given gas turbine located in a client site.
Note that in the future much of this data will be automatically collected (for example, KPIs derived from sensor data) or uploaded in “packages” (for example, turbine/KPIs combinations). Your task in this pilot system is to provide a tool to execute these transactions manually so that you can demonstrate to your sponsors the potential of the tool.
 
Final Deliverable Expectations 
Your task is to build the first iteration of a web application that can support the technical requirements detailed in this case. The sample KPI output (TurbineData.xlsx) that you will use for this initial prototype is attached. It contains data for four different turbines, one in each sheet. Your final solution should have a fully operational MySQL normalized database containing multiple tables. 
Once you have completed the MVP1, you will pitch out to the leadership team and request funding and approval for your application to continue development. Your presentation should include all of the requirements detailed below. The team in each group that provides the best technical demo and business case will be selected for approval. 
Technical Requirements 
•	Use a predefined tech stack (MySQL, PHP, AngularJS) to display key performance indicators of various turbines 
•	The data should be dynamically accessed from a MySQL database which stores KPI data and delivered through a web API
•	Data should be displayed using the Highcharts Javascript library, as this stack is used for other technology projects at AGS
•	Assume that real time data will be part of a future iteration of the web app (i.e., you are only responsible for the data equivalent to that in the Excel sheet you are provided with) 
Stakeholder Requirements 
Tommy Edison is the senior service manager championing changes to the current service process. He has worked with the RMS team and Columbia Energy and other service managers to determine the following requirements. You will have additional time throughout the next two weeks to ask Tommy more questions about these requirements. 
•	SMs can view the table with the KPI output 
•	SMs can visualize one or more of the KPIs to assist with determining turbine health 
o	KPI visualization will be in the form of a Highchart (e.g. line graph) 
Important Consideration
AGS expects innovative ideas from all employees. Evaluation of the proposals will put a premium on factors that are creative and go beyond the minimum specifications find in the project documents. There is no “right answer”; each team is expected to be inventive and present the best project they can achieve before the deadline. Innovative ideas can take the form of new features, database extensions, better styling, etc. However, it is important you ensure core functionality is complete before adding additional features.
