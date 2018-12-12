# Welcome to the DomainCloud API

We divided our function into 3 types:
1.  Domain Functions
2.  DNS Functions
3.  Domain Forwarding Functions

# Domain Functions
This type include several actions, such as:

|Action|Description|Documentation|
|--- |--- |--- |
|RegisterDomain|Registration of a new domain||
|TransferDomain|Transfer a domain||
|RenewDomain|Renew a domain||
|GetNameservers|Return up to 5 nameservers that are set for the domain|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetNameservers)|
|SaveNameservers|Change a domains nameservers||
|GetRegistrarLock|Return the current lock status of a domain|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetRegistrarLockStatus)|
|SaveRegistrarLock|Activate/Non-activate lock status setting||
|GetContactDetails|Return WHOIS information|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetContactDetails)|
|SaveContactDetails|Revised WHOIS information||
|GetEPPCode|Request EPP Code for a transfer out.|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetEPPCode)|
|RegisterNameserver|Child nameserver registration||
|ModifyNameserver|Child nameserver modification||
|DeleteNameserver|Child nameserver deletion||
|RequestDelete|Domain deletion||
|UploadFile|Upload domain documents||
|GetCreditBalance|Retrieve reseller credit balance|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetCreditBalance)|
|GetTLDPricing|Retrieve reseller TLD pricing|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/GetTLDPricing)|

# DNS Functions
This type include several actions, such as:


|Action|Description|Documentation|
|--- |--- |--- |
|GetRecords|Return the DNS Records|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DNS-GetRecords)|
|AddRecord|Add DNS Host Record|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DNS-AddRecord)|
|SaveRecords|Sumbitted changes to DNS Host Records information|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DNS-SaveRecords)|
|DeleteRecord|Delete DNS Host Record|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DNS-DeleteRecord)|

# DF Functions
This type include several actions, such as:


|Action|Description|Documentation|
|--- |--- |--- |
|GetRecords|Return the Domain Forwarding Records|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DF-GetRecords)|
|AddRecord|Add DF Record|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DF-AddRecord)|
|SaveRecords|Sumbitted changes to DF Records information|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DF-SaveRecords)|
|DeleteRecord|Delete DF Record|[Link](https://github.com/DomainCloud/domaincloud-api/wiki/DF-DeleteRecord)|