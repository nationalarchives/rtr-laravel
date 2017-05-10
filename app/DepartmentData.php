<?php

namespace App;

trait DepartmentData
{
    private $departments = array(
        [
            'name' => 'All 21 departments',
            'url' => '',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 942075,
                    'records_selected_for_transfer' => 450506,
                    'records_selected_for_transfer_under_lci' => 63240,
                    'records_still_to_be_reviewed' => 28699,
                    'records_still_to_be_reviewed_under_lci' => 346961,
                    'planned_total_for_year_end_transfer' => 51558,
                    'awaiting_disposal' => 31217,
                    'awaiting_disposal_under_lci' => 21452,
                    'comments' => ''
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 282305,
                    'records_selected_for_transfer' => 13504,
                    'records_selected_for_transfer_under_lci' => 6180,
                    'records_still_to_be_reviewed' => 105557,
                    'records_still_to_be_reviewed_under_lci' => 58284,
                    'planned_total_for_year_end_transfer' => 7148,
                    'awaiting_disposal' => 63692,
                    'awaiting_disposal_under_lci' => 35088,
                    'comments' => ''
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 358425,
                    'records_selected_for_transfer' => 2983,
                    'records_selected_for_transfer_under_lci' => 595,
                    'records_still_to_be_reviewed' => 274542,
                    'records_still_to_be_reviewed_under_lci' => 38178,
                    'planned_total_for_year_end_transfer' => 7147,
                    'awaiting_disposal' => 40288,
                    'awaiting_disposal_under_lci' => 1839,
                    'comments' => ''
                )

            )],
        [
            'name' => 'Cabinet Office',
            'url' => 'http://www.gov.uk/government/organisations/cabinet-office',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 16208,
                    'records_selected_for_transfer' => 1287,
                    'records_selected_for_transfer_under_lci' => 73,
                    'records_still_to_be_reviewed' => 662,
                    'records_still_to_be_reviewed_under_lci' => 5092,
                    'planned_total_for_year_end_transfer' => 671,
                    'awaiting_disposal' => 9094,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'The majority of the files awaiting review are routine administrative records, many inherited by the department in machinery of government changes.  The Department has focussed resources on Prime Minister and Cabinet records for selection and transfer.   There is currently a moratorium on destruction of records.  Records marked for disposal will be destroyed once the moratorium is lifted.'
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 3590,
                    'records_selected_for_transfer' => 1105,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 105,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 1105,
                    'awaiting_disposal' => 2380,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'Records under "Records awaiting disposal" are routine administrative records.  The Department focussed resources on Prime Minister and Cabinet records for selection and transfer.   There is currently a moratorium on destruction of records.  Records marked for disposal will be destroyed once the moratorium is lifted.'
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 5209,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 2200,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 1100,
                    'awaiting_disposal' => 3009,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'The figures in this section are estimates based on current and recent years experience.  The records under "Records awaiting disposal" cover routine administrative records.  The Department focusses resources on Prime Minister and Cabinet records for selection and transfer.   There is currently a moratorium on destruction of records.  Records marked for disposal will be destroyed once the moratorium is lifted.'
                )
            )],
        [
            'name' => 'Crown Prosecution Service',
            'url' => 'http://www.cps.gov.uk',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 1454,
                    'records_selected_for_transfer' => 290,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 290,
                    'awaiting_disposal' => 1164,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'Application for approval under section 3(4) of the PRA for period 1960 to 1974 and 1985 to 1988 was submitted to the Advisory Council. Pending Secretary of States approval.'
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 2161,
                    'records_selected_for_transfer' => 85,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 444,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 85,
                    'awaiting_disposal' => 1632,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'Application for approval under section 3(4) of the PRA for period 1989 to 1990 has been submitted to the Advisory Council. Pending Secretary of States approval.'
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 1282,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 1282,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 90,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'Application for approval under section 3(4) of the PRA for period 1991 to 1992 has been submitted to the Advisory Council. Pending Secretary of States approval.'
                )
            )],
        [
            'name' => 'Department for Business, Innovation and Skills',
            'url' => 'https://www.gov.uk/government/organisations/department-for-business-innovation-skills',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 10347,
                    'records_selected_for_transfer' => 987,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 3510,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 5850,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => 'As stated during the last RTR - BIS developed, in conjunction with TNA, a three year records review and transfer plan. Additional staff were recruited and this has resulted in a reduction of legacy   records and an increase in the number of records being prepared for transfer to TNA. The increase in records review and file cleaning has resulted in a larger than average build-up of files for transfer. Therefore, we cannot specify the number of records transferring as this is dependent on a number of factors, including TNA resource. The files available for transfer will be planned and scheduled with TNA before the next RTR. The figures in the RTR have not been amended to reflect the recent MOG changes affecting BIS, DECC, DfE, DIT and OGA. Before the next RTR, we expect records to transfer between  departments and the figures will be adjusted accordingly.'
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 3633,
                    'records_selected_for_transfer' => 162,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 1942,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 1529,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ''
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 3776,
                    'records_selected_for_transfer' => 147,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 2025,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 1604,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ''
                )
            )],
        [
            'name' => 'Department for Communities and Local Government',
            'url' => 'https://www.gov.uk/government/organisations/department-for-communities-and-local-government',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 3174,
                    'records_selected_for_transfer' => 132,
                    'records_selected_for_transfer_under_lci' => 5,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 5,
                    'planned_total_for_year_end_transfer' => 132,
                    'awaiting_disposal' => 3032,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "DCLG has had a general moratorium on destructions due to the Independent Inquiry into Child Sexual Abuse. Authorisation for the disposal of non- relevant material has been received very recently. A programme of the destruction of non-relevant material will commence shortly."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 1293,
                    'records_selected_for_transfer' => 116,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 215,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 120,
                    'awaiting_disposal' => 962,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ''
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 1876,
                    'records_selected_for_transfer' => 15,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 1613,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 47,
                    'awaiting_disposal' => 248,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ''
                )
            )],
        [
            'name' => 'Department for Culture, Media and Sport',
            'url' => 'https://www.gov.uk/dcms',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 86716,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 86716,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "The permanent Departmental Records Officer (DRO) is now in place and resources have been scoped in partnership with DCLG to take forward record preparation work.  The focus of the DCMS Records Management team is now on the 17,160 records which are overdue review and those records due review in 2016 and 2017."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 22042,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 22042,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "The 22,042 figure set out in this 'In Year (2016)' section represents 17,160 records overdue review and 4,882 records due review in 2016. DCMS will now work with DCLG and TNA to formulate a detailed plan for the review of these records."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 27206,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 27206,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 423,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "The 27,206 figure set out in this 'Next Year (2017)' section represents the 17,160 records overdue review, the 4,882 records due review in 2016 and the 5,164 records due review in 2017.  During the remainder of 2016 DCMS will work with DCLG and TNA to finalise a detailed plan for the review of these records which will then lead into review work being taken forward."
                )
            )],
        [
            'name' => 'Department for Education',
            'url' => 'https://www.gov.uk/dfe',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 6375,
                    'records_selected_for_transfer' => 21,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 6057,
                    'planned_total_for_year_end_transfer' => 20,
                    'awaiting_disposal' => 297,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "We have Retention Instruments covering 6057 records on children's homes which are still required for business use. We expect to transfer 20 legacy records by the end of 2016 and the remaining 1 in 2017."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 1260,
                    'records_selected_for_transfer' => 291,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 969,
                    'planned_total_for_year_end_transfer' => 291,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "We have Retention Instruments to cover 924 records on children's homes which are still required for business use and a further 45 records on buildings management which are not of any ongoing historical value but are required for business use."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 8514,
                    'records_selected_for_transfer' => 440,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 1166,
                    'planned_total_for_year_end_transfer' => 440,
                    'awaiting_disposal' => 6908,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "We have Retention Instruments to cover 1146 records on children's homes which are required for business use and to cover a further 20 records on buildings management which are not of any ongoing historical value but are required for business use. The increase in the number of records awaiting disposal from the Spring report is due to the omission in error of a set of records that had been previously reviewed but are still awaiting disposal."
                )
            )],
        [
            'name' => 'Department of Energy and Climate Change',
            'url' => 'https://www.gov.uk/government/organisations/department-of-energy-climate-change',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 937,
                    'records_selected_for_transfer' => 499,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 307,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 131,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "As stated during the last RTR - BIS developed, in conjunction with TNA, a three year records review and transfer plan (as part of the KIM/RM SLA between both departments). Additional staff were recruited and this has resulted in a reduction of legacy records and an increase in the number of records being prepared for transfer to TNA. The increase in records review and file cleaning has resulted in a larger than average build-up of files for transfer. Therefore, we cannot specify the number of records transferring this year as it is dependent on a number of factors, including TNA resource. The files available for transfer will be planned and scheduled with TNA before the next RTR. The figures in the RTR have not been amended to reflect the recent MOG changes affecting BIS, DECC, DfE, DIT and OGA. Before the next RTR, we expect records to transfer between  departments and the figures will be adjusted accordingly."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 239,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 227,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 12,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 597,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 291,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 306,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                )
            )],
        [
            'name' => 'Department for Environment, Food and Rural Affairs',
            'url' => 'https://www.gov.uk/government/organisations/department-for-environment-food-rural-affairs',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 19711,
                    'records_selected_for_transfer' => 438,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 7082,
                    'records_still_to_be_reviewed_under_lci' => 645,
                    'planned_total_for_year_end_transfer' => 11,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 11546,
                    'comments' => "1. The majority of files under column G will be appraised in the current business year.  2. The files under column L have been appraised, do not meet the TNA's Collection policy but are required for ongoing business use.  3. We expect to receive up to 34000 ex Fera records for storage and/or appraisal.  Their status and age cannot be determined at present but will be declared on the Spring 2017 RTR."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 22558,
                    'records_selected_for_transfer' => 44,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 1272,
                    'records_still_to_be_reviewed_under_lci' => 5,
                    'planned_total_for_year_end_transfer' => 4,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 21237,
                    'comments' => ""
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 2360,
                    'records_selected_for_transfer' => 68,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 2173,
                    'records_still_to_be_reviewed_under_lci' => 119,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "We are working with the National Archives to deliver a programme of selection, review and transfer."
                )
            )],
        [
            'name' => 'Department for International Development',
            'url' => 'https://www.gov.uk/government/organisations/department-for-international-development',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 3,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 3,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "Records for further sensitivity review"
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 4294,
                    'records_selected_for_transfer' => 679,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 1063,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 900,
                    'awaiting_disposal' => 2552,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "Estimated figure. DFID operated on a 3 year file period during this time. Figures relate to records covering 1989/91."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 14000,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 14000,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 2100,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "Estimated figure. DFID operated on a 3 year file period (opening and closing of files) during this time. Figures relate to records covering 1992 to 1994."
                )
            )],
        [
            'name' => 'Department for Transport',
            'url' => 'https://www.gov.uk/government/organisations/department-for-transport',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 823,
                    'records_selected_for_transfer' => 138,
                    'records_selected_for_transfer_under_lci' => 11,
                    'records_still_to_be_reviewed' => 600,
                    'records_still_to_be_reviewed_under_lci' => 11,
                    'planned_total_for_year_end_transfer' => 138,
                    'awaiting_disposal' => 63,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "The volume of legacy records reflects the combined holdings from the central department and four agencies: DVLA, DVSA, MCA and VCA. 600 of the legacy records are from the Driver and Vehicle Licensing Agency, which have been identified as part of an exercise to audit and reconcile records listed incorrectly within other storage accounts. Work to review and dispose of them in line with the business need continues."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 1167,
                    'records_selected_for_transfer' => 135,
                    'records_selected_for_transfer_under_lci' => 4,
                    'records_still_to_be_reviewed' => 378,
                    'records_still_to_be_reviewed_under_lci' => 4,
                    'planned_total_for_year_end_transfer' => 140,
                    'awaiting_disposal' => 646,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 2193,
                    'records_selected_for_transfer' => 143,
                    'records_selected_for_transfer_under_lci' => 4,
                    'records_still_to_be_reviewed' => 2033,
                    'records_still_to_be_reviewed_under_lci' => 4,
                    'planned_total_for_year_end_transfer' => 211,
                    'awaiting_disposal' => 9,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                )
            )],
        [
            'name' => 'Department for Work and Pensions',
            'url' => 'https://www.gov.uk/government/organisations/department-for-work-pensions',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 0,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "DWP does not hold any legacy files."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 18731,
                    'records_selected_for_transfer' => 2687,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 2687,
                    'awaiting_disposal' => 16044,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "The files to be transferred in 2016 were created in 1990 and 1991, files created in 1989 were transferred in 2015."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 31484,
                    'records_selected_for_transfer' => 21,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 20861,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 10602,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "Number of files selected for transfer will not be known until file by file review is completed. The review is for files created in the period 1992 and 1993. Files created in 1991 will be transferred in 2016."
                )
            )],
        [
            'name' => 'Department of Health',
            'url' => 'https://www.gov.uk/government/organisations/department-of-health',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 12233,
                    'records_selected_for_transfer' => 258,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 6338,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 250,
                    'awaiting_disposal' => 5637,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 19023,
                    'records_selected_for_transfer' => 375,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 18548,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 80,
                    'awaiting_disposal' => 100,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 22634,
                    'records_selected_for_transfer' => 321,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 22251,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 62,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                )
            )],
        [
            'name' => 'Foreign and Commonwealth Office',
            'url' => 'https://www.gov.uk/archive-records',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 154650,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 18683,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 134583,
                    'planned_total_for_year_end_transfer' => 14542,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 1384,
                    'comments' => "This covers annual departmental files. It excludes files in legacy series identified during an audit in 2014, which are currently being appraised. These figures also exclude non-standard legacy files held by the FCO. See www.gov.uk/archive-records for more information on the FCO's total archive holdings and the record release programme, including the non-standard holdings. Where identified as necessary, all FCO files are held under a Retention Instrument."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 71401,
                    'records_selected_for_transfer' => 4142,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 67259,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "These files are not yet overdue for transfer and are therefore not subject to a Retention Instrument. No files from 1989 and 1990 will transfer during 2016. However, 14542 files from 1984, 1985 and 1986 will transfer during 2016."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 75894,
                    'records_selected_for_transfer' => 1281,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 74015,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 598,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "No files from 1991 and 1992 will transfer during 2017. However, approximately 12000 files from 1986, 1987 and 1988 are expected to transfer during this period."
                )
            )],
        [
            'name' => 'Health and Safety Executive',
            'url' => 'http://www.hse.gov.uk/foi/retention-schedule.htm',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 2565,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 473,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 897,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 1195,
                    'comments' => "Records to be reviewed within the next 6 - 9 months, resource permitting. Most of the records are from operations file series which are not considered for TNA long term preservation."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 17186,
                    'records_selected_for_transfer' => 147,
                    'records_selected_for_transfer_under_lci' => 201,
                    'records_still_to_be_reviewed' => 4511,
                    'records_still_to_be_reviewed_under_lci' => 1614,
                    'planned_total_for_year_end_transfer' => 123,
                    'awaiting_disposal' => 10553,
                    'awaiting_disposal_under_lci' => 160,
                    'comments' => "These totals now include statistics from Chemical Regulation Directorate which have not previously been included. The 123 planned for transfer have now been transferred. LCI's 111, 124 and 85 apply. As we are currently undergoing a programme of change we have agreed with TNA to put review work on hold temporarily and we are seeking an RI/LCI to approve this."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 23319,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 23,
                    'records_still_to_be_reviewed' => 7057,
                    'records_still_to_be_reviewed_under_lci' => 1808,
                    'planned_total_for_year_end_transfer' => 460,
                    'awaiting_disposal' => 14284,
                    'awaiting_disposal_under_lci' => 147,
                    'comments' => ""
                )
            )],
        [
            'name' => 'HM Revenue and Customs',
            'url' => 'http://www.hmrc.gov.uk',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 764,
                    'records_selected_for_transfer' => 104,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 251,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 104,
                    'awaiting_disposal' => 409,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "We have identified a number of records that are waiting to be appraised that we believe will hold records worthy of permanent preservation but we are unable to quantify that number at this time. We are working with TNA to put in place a programme of appraisal, selection and transfer for our records."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 2,
                    'records_selected_for_transfer' => 2,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 2,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 344,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 344,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                )
            )],
        [
            'name' => 'HM Treasury',
            'url' => 'https://www.gov.uk/government/organisations/hm-treasury',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 95970,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 30941,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 63559,
                    'planned_total_for_year_end_transfer' => 30941,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 1470,
                    'comments' => "HM Treasury is running behind TNA's 20-year Rule Transition Plan but we are systematically working through our legacy over the next few years under a plan agreed with the Advisory Council on National Records and Archives."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 46235,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 32584,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 13651,
                    'comments' => "Because HM Treasury is running behind TNA's 20-year Rule Transition Plan the transfer of files from 1989-90 will happen in 2017, not 2016. This approach has been agreed with the Advisory Council on National Records and Archives."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 36305,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 34680,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 1625,
                    'comments' => "No Retention Instrument (RI) is required for any of these records at present as none are due for transfer until the end of December 2017. We anticipate that a new RI will be required to hold 1991-92 records in 2018 and we will seek one next year."
                )
            )],
        [
            'name' => 'Home Office',
            'url' => 'https://www.gov.uk/government/organisations/home-office',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 11778,
                    'records_selected_for_transfer' => 590,
                    'records_selected_for_transfer_under_lci' => 2831,
                    'records_still_to_be_reviewed' => 449,
                    'records_still_to_be_reviewed_under_lci' => 1558,
                    'planned_total_for_year_end_transfer' => 790,
                    'awaiting_disposal' => 1326,
                    'awaiting_disposal_under_lci' => 5024,
                    'comments' => "A Retention Application has been submitted to the Advisory Council to cover the 449 newly registered files. Home Office is prioritising work to reduce all legacy records and anticipates transferring a significant number of files in the early part of 2017."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 8543,
                    'records_selected_for_transfer' => 150,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 8393,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "A Retention Instrument has been applied for to cover these records. Work on these files is suspended whilst legacy files are addressed.  Home Office anticipates selecting around only 1,200 of the above files for the Review programme, with the remainder being disposed of."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 10597,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 10597,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "Work on these records will remain suspended until legacy files are addressed. Typically only 5-10% of surviving files are selected for Transfer and Home Office anticipates that the majority of the files identified above will ultimately be disposed."
                )
            )],
        [
            'name' => 'Ministry of Defence',
            'url' => 'https://www.gov.uk/government/publications/mods-records-transfer-report-and-explanation',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 514033,
                    'records_selected_for_transfer' => 442449,
                    'records_selected_for_transfer_under_lci' => 9202,
                    'records_still_to_be_reviewed' => 9500,
                    'records_still_to_be_reviewed_under_lci' => 47835,
                    'planned_total_for_year_end_transfer' => 1588,
                    'awaiting_disposal' => 4214,
                    'awaiting_disposal_under_lci' => 833,
                    'comments' => "Records in column G (still to be reviewed and not subject to a RI) are predominantly Defence estate maps and plans, with those in column H (still to be reviewed and subject to a RI) being World War Two RAF casualty packs. Records in column I (selected for transfer and not subject to a RI) are predominantly service personnel records with a year of birth of pre-1902, MOD is working with The National Archives to determine how best to transfer these records.  Those in column J (selected for transfer and subject to a RI) are also World War Two RAF casualty packs, but these have been reviewed and selected for transfer to TNA."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 34750,
                    'records_selected_for_transfer' => 1672,
                    'records_selected_for_transfer_under_lci' => 5049,
                    'records_still_to_be_reviewed' => 500,
                    'records_still_to_be_reviewed_under_lci' => 207,
                    'planned_total_for_year_end_transfer' => 236,
                    'awaiting_disposal' => 27282,
                    'awaiting_disposal_under_lci' => 40,
                    'comments' => "The records under \"Records still to be reviewed\" are predominantly administrative registered files, whilst those records selected for transfer include Ships Logs and RAF Operational Record Books.  The records awaiting disposal are mainly administrative registered files that the department would normally have destroyed but can’t due to the self-imposed preservation order on records that might be required for the Independent Inquiry into Child Sexual Abuse.  All Ships Logs dated to 1995 will be transferred to TNA this year."
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 62736,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 568,
                    'records_still_to_be_reviewed' => 61700,
                    'records_still_to_be_reviewed_under_lci' => 401,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 67,
                    'comments' => "\"Records still to be reviewed\" shows the number of records in the MOD Main, Sensitive and DGC archives identified from this period.  Records under column AC are predominantly RAF Operational Record Books.  Records under column AE are DGC administrative files. The number of records to be transferred in this period has yet to be agreed with TNA. "
                )
            )],
        [
            'name' => 'Ministry of Justice',
            'url' => 'http://www.justice.gov.uk',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 2313,
                    'records_selected_for_transfer' => 2313,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 138,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "We are working with TNA to put in place a programme of appraisal, selection and transfer for our records."
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 1912,
                    'records_selected_for_transfer' => 1212,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 700,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 24439,
                    'records_selected_for_transfer' => 347,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 21434,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 0,
                    'awaiting_disposal' => 2658,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                )
            )],
        [
            'name' => 'Northern Ireland Office',
            'url' => 'https://www.gov.uk/government/organisations/northern-ireland-office',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 1021,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 1021,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 943,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 1785,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 926,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 859,
                    'planned_total_for_year_end_transfer' => 875,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 3460,
                    'records_selected_for_transfer' => 0,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 3460,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 2076,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => "Estimate based on usual percentage selected for permanent preservation."
                )
            )],
        [
            'name' => 'Ordnance Survey',
            'url' => 'http://www.ordnancesurvey.co.uk/',
            'transfers' => array(
                'legacy' => array( // Legacy
                    'total_records_held' => 1000,
                    'records_selected_for_transfer' => 1000,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 1000,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'current_year' => array( // Current year
                    'total_records_held' => 500,
                    'records_selected_for_transfer' => 500,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 500,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                ),
                'forecast' => array( // Forecast
                    'total_records_held' => 200,
                    'records_selected_for_transfer' => 200,
                    'records_selected_for_transfer_under_lci' => 0,
                    'records_still_to_be_reviewed' => 0,
                    'records_still_to_be_reviewed_under_lci' => 0,
                    'planned_total_for_year_end_transfer' => 200,
                    'awaiting_disposal' => 0,
                    'awaiting_disposal_under_lci' => 0,
                    'comments' => ""
                )
            )]);
}