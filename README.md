# 🌐 Telco Cloud: High-Availability Subscriber Management

## 📋 Project Overview
This project demonstrates a robust **3-Tier Cloud Architecture** designed for Telecommunications Service Providers. It features a **Virtual Network Function (VNF)** integrated with **Auto Scaling** to ensure the Subscriber Management Portal remains available under any traffic load.

---

## 🏗️ Architecture Design
The infrastructure is built within a custom **VPC** to provide maximum security and logical isolation:

* **Public Tier:** Hosts the **Application Load Balancer (ALB)** and Internet Gateway.
* **Private Tier (App):** Hosts the EC2 Web Servers (VNF Portal) across multiple instances.
* **Private Tier (Data):** Hosts the **Amazon RDS (MySQL)** database, isolated from public access.
* **Elasticity:** An **Auto Scaling Group (ASG)** monitors demand and adjusts the number of servers automatically.

### 🗺️ Infrastructure Resource Map
![Resource Map](./Resourse%20map.png)
*Detailed visual of the VPC, Subnets, and Gateways.*

---

## 🚀 Key Features & Implementation

### 1. Auto Scaling & High Availability
The system is configured to maintain a **Desired Capacity of 2 instances**, with the ability to scale up to 3 based on CPU demand. This ensures that subscriber services are never interrupted.

![Instances Status](./Instances%20(3)%20.png)
*Evidence of 3 running instances managed by the ASG during peak load.*

![ASG Configuration](./Auto%20Scaling%20groups.png)
*Auto Scaling Group status showing successful capacity management.*

### 2. VNF User Interface
The portal provides real-time database connectivity status and subscriber management tools, simulating a real-world telecom dashboard.

![VNF Interface](./VNF%20Interface.png)
*The front-end interface of the Telecom Service Management.*

### 3. Real-time Monitoring (Observability)
Integrated with **Amazon CloudWatch** to track system health. I prioritized **CPU Utilization** as the primary metric for our Auto Scaling policy, providing a clear baseline for performance tuning.

![CPU Utilization](./cloudwatch.png)
*CloudWatch Metrics: Visualizing CPU activity and system stability.*

---

## 📁 Repository Structure
* `index.php`: The main portal logic for subscriber management.
* `config.php`: Secure database connection configuration.
* `cloudwatch.png`: CloudWatch CPU metrics screenshot.
* `Resourse map.png`: Infrastructure design overview.

---

## 🛠️ Tech Stack
* **Cloud Provider:** AWS (VPC, EC2, RDS, ASG, CloudWatch)
* **Backend:** PHP 8.x
* **Database:** MySQL (Amazon RDS)
* **Web Server:** Apache (httpd)
