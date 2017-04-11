<?php

namespace App;

trait DepartmentData
{
    private $departments = array([
        'name' => 'Cabinet Office',
        'url' => 'http://www.gov.uk/government/organisations/cabinet-office',
        'legacy' => array( // Legacy
            'totalRecordsHeld' => 16208,
            'recordsSelectedForTransfer' => 1287,
            'recordsSelectedForTransferUnderLCI' => 73,
            'recordsStillToBeReviewed' => 662,
            'recordsStillToBeReviewedUnderLCI' => 5092,
            'plannedTotalForYearEndTransfer' => 671,
            'awaitingDisposal' => 9094,
            'awaitingDisposalUnderLCI' => 0,
            'comments' => 'The majority of the files awaiting review are routine administrative records, many inherited by the department in machinery of government changes. The Department has focussed resources on Prime Minister and Cabinet records for selection and transfer. There is currently a moratorium on destruction of records. Records marked for disposal will be destroyed once the moratorium is lifted.'
        ),
        'current_year' => array( // Current year
            'totalRecordsHeld' => 3590,
            'recordsSelectedForTransfer' => 1105,
            'recordsSelectedForTransferUnderLCI' => 0,
            'recordsStillToBeReviewed' => 105,
            'recordsStillToBeReviewedUnderLCI' => 0,
            'plannedTotalForYearEndTransfer' => 1105,
            'awaitingDisposal' => 2380,
            'awaitingDisposalUnderLCI' => 0,
            'comments' => 'Records at C1 are routine administrative records.  The Department focussed resources on Prime Minister and Cabinet records for selection and transfer. There is currently a moratorium on destruction of records. Records marked for disposal will be destroyed once the moratorium is lifted.'
        ),
        'forecast' => array( // Forecast
            'totalRecordsHeld' => 5209,
            'recordsSelectedForTransfer' => 0,
            'recordsSelectedForTransferUnderLCI' => 0,
            'recordsStillToBeReviewed' => 2200,
            'recordsStillToBeReviewedUnderLCI' => 0,
            'plannedTotalForYearEndTransfer' => 1100,
            'awaitingDisposal' => 3009,
            'awaitingDisposalUnderLCI' => 0,
            'comments' => 'The figures in this section are estimates based on current and recent years experience. The records at C1 cover routine administrative records. The Department focusses resources on Prime Minister and Cabinet records for selection and transfer. There is currently a moratorium on destruction of records. Records marked for disposal will be destroyed once the moratorium is lifted.'
        )], [
        'name' => 'Crown Prosecution Service',
        'url' => 'http://www.cps.gov.uk',
        'legacy' => array( // Legacy
            'totalRecordsHeld' => 1542,
            'recordsSelectedForTransfer' => 378,
            'recordsSelectedForTransferUnderLCI' => 0,
            'recordsStillToBeReviewed' => 0,
            'recordsStillToBeReviewedUnderLCI' => 0,
            'plannedTotalForYearEndTransfer' => 378,
            'awaitingDisposal' => 0,
            'awaitingDisposalUnderLCI' => 1164,
            'comments' => "Application for approval under section 3(4) of the PRA for records held for period 1960 to 1974 and 1985 to 1988 will be before the next Advisory Council meeting on 21 July, 2016."
        ),
        'current_year' => array( // Current year
            'totalRecordsHeld' => 1353,
            'recordsSelectedForTransfer' => 61,
            'recordsSelectedForTransferUnderLCI' => 0,
            'recordsStillToBeReviewed' => 70,
            'recordsStillToBeReviewedUnderLCI' => 0,
            'plannedTotalForYearEndTransfer' => 31,
            'awaitingDisposal' => 0,
            'awaitingDisposalUnderLCI' => 1222,
            'comments' => "Application for approval under section 3(4) of the PRA for records held for period 1989 to 1990 will be before the next Advisory Council meeting on 21 July, 2016. Records planned for transfer excludes records for year 1990."
        ),
        'forecast' => array( // Forecast
            'totalRecordsHeld' => 1526,
            'recordsSelectedForTransfer' => 0,
            'recordsSelectedForTransferUnderLCI' => 0,
            'recordsStillToBeReviewed' => 0,
            'recordsStillToBeReviewedUnderLCI' => 1526,
            'plannedTotalForYearEndTransfer' => 90,
            'awaitingDisposal' => 0,
            'awaitingDisposalUnderLCI' => 0,
            'comments' => "Application for approval under section 3(4) of the PRA for records held for period 1991 to 1992 will be before the next Advisory Council meeting on 21 July, 2016."
        )],

        [
            'name' => 'Department for Business, Innovation and Skills',
            'url' => 'https://www.gov.uk/government/organisations/department-for-business-innovation-skills',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 11065,
                'recordsSelectedForTransfer' => 987,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 4234,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 400,
                'awaitingDisposal' => 5844,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "BIS has developed, in conjunction with TNA, a three year Records Review and Transfer plan. The plan includes the review, cataloguing and preparation of files for transfer of all legacy and 2016/17 records by the end of 2018. This plan will be presented to the Advisory Council in July. Additional staff have been recruited to address the issue of legacy records and transfer of records to TNA."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 3631,
                'recordsSelectedForTransfer' => 162,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 1942,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 1527,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Please see explanatory comments under the legacy section."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 3770,
                'recordsSelectedForTransfer' => 147,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 2023,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 1600,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Please see explanatory comments under the legacy section."

            )],

        [
            'name' => 'Department for Communities and Local Government',
            'url' => 'https://www.gov.uk/government/organisations/department-for-communities-and-local-government',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 3370,
                'recordsSelectedForTransfer' => 316,
                'recordsSelectedForTransferUnderLCI' => 5,
                'recordsStillToBeReviewed' => 27,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 316,
                'awaitingDisposal' => 3022,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "DCLG has a general moratorium on destructions due to the Independent Inquiry into Child Sexual Abuse. It is anticipated that the DCLG will authorise destruction of non-relevant material during the coming months following senior management approval."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 3290,
                'recordsSelectedForTransfer' => 1304,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 706,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 1318,
                'awaitingDisposal' => 1280,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "DCLG has a general moratorium on destructions due to the Independent Inquiry into Child Sexual Abuse. It is anticipated that the DCLG will authorise destruction of non-relevant material during the coming months following senior management approval."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 1891,
                'recordsSelectedForTransfer' => 19,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 1636,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 52,
                'awaitingDisposal' => 236,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "DCLG has a general moratorium on destructions due to the Independent Inquiry into Child Sexual Abuse. It is anticipated that the DCLG will authorise destruction of non-relevant material during the coming months following senior management approval."
            )],

        [
            'name' => 'Department for Culture, Media and Sport',
            'url' => 'https://www.gov.uk/dcms',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 1774,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 1763,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 11,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "DCMS has now employed a DRO. A plan will be put in place with support from DCLG and TNA to agree a way forward with all DCMS units to address the backlog of physical files held in Tottenham Court Road and Iron Mountain between now and the end of the calendar year. A protocol will be raised to determine either long term preservation, destruction or continued retention of files currently held. This will be conducted in conjunction and with the support of DCLG KM and TNA staff."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 1595,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 1466,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 129,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "DCMS has now employed a DRO. A plan will be put in place with support from DCLG and TNA to agree a way forward with all DCMS units to address the backlog of physical files held in Tottenham Court Road and Iron Mountain between now and the end of the calendar year. A protocol will be raised to determine either long term preservation, destruction or continued retention of files currently held. This will be conducted in conjunction and with the support of DCLG KM and TNA staff."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 2057,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 1995,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 62,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "DCMS has now employed a DRO. A plan will be put in place with support from DCLG and TNA to agree a way forward with all DCMS units to address the backlog of physical files held in Tottenham Court Road and Iron Mountain between now and the end of the calendar year. A protocol will be raised to determine either long term preservation, destruction or continued retention of files currently held. This will be conducted in conjunction and with the support of DCLG KM and TNA staff."
            )],

        [
            'name' => 'Department for Education',
            'url' => 'https://www.gov.uk/dfe',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 6374,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 317,
                'recordsStillToBeReviewedUnderLCI' => 6057,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "The Department holds 317 legacy records which have not yet been reviewed. Due to earlier MOG changes 327 legacy records have been transferred to the Department for Business, Innovation and Skills since the Autumn 2015 RTR. We are working with TNA to review and dispose of these records and hope to complete this by the end of 2016. We have Retention Instruments covering 6057 records on children's homes which are still required for business use. The increase of 265 since the previous RTR is due to a review we conducted of the children's homes files we hold, which resulted in our successful application for a further RI covering these additional records."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 1260,
                'recordsSelectedForTransfer' => 291,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 969,
                'plannedTotalForYearEndTransfer' => 291,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Since completing the RTR for Autumn 2015 we have acquired Retention Instruments to cover 924 records on children's homes which are still required for business use and for a further 45 records on buildings management which are not of any on-going historical value but are required for business use. In addition 557 records have been transferred to the Department for Business, Innovation and Skills following earlier MOG changes. The reduction in the number of files planned for transfer in 2016 is due to an error in the response to the last RTR, when all the split parts of the files were counted instead of just the number of records."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 3895,
                'recordsSelectedForTransfer' => 252,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 842,
                'recordsStillToBeReviewedUnderLCI' => 1166,
                'plannedTotalForYearEndTransfer' => 375,
                'awaitingDisposal' => 1635,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "The Department has Retention Instruments to cover 1146 records on children's homes which are still required for business use and to cover a further 20 records on buildings management, which are not of any on-going historical value but are required for business use."
            )],

        [
            'name' => 'Department of Energy and Climate Change',
            'url' => 'https://www.gov.uk/government/organisations/department-of-energy-climate-change',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 1490,
                'recordsSelectedForTransfer' => 499,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 860,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 200,
                'awaitingDisposal' => 131,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "BIS has developed with DECC, in conjunction with TNA, a three year Records Review and Transfer plan (as part of the KIM/Records Management Service Level Agreement between both Departments). The plan includes the review, cataloguing and preparation of files for transfer of all legacy and 2016/17 records by the end of 2018. This plan will be presented to the Advisory Council in July. Additional staff have been recruited to address the issue of legacy records and transfer of records to TNA."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 239,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 227,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 12,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Please see explanatory comments under the legacy section."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 597,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 291,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 306,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Please see explanatory comments under the legacy section."
            )],

        [
            'name' => 'Department for Environment, Food and Rural Affairs',
            'url' => 'https://www.gov.uk/government/organisations/department-for-environment-food-rural-affairs',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 21055,
                'recordsSelectedForTransfer' => 347,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 8160,
                'recordsStillToBeReviewedUnderLCI' => 645,
                'plannedTotalForYearEndTransfer' => 315,
                'awaitingDisposal' => 357,
                'awaitingDisposalUnderLCI' => 11546,
                'comments' => "The majority of files at A1 will be appraised in the current business year. The files at C2 have been appraised, do not meet the TNA's record collection policy but are being retained for ongoing business use. From 1/7/16 we expect to receive up to 34 000 ex Fera records for storage and/or appraisal.  Their status and age cannot be determined at this time but will be declared on the Autumn 2016 RTR"
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 23223,
                'recordsSelectedForTransfer' => 28,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 1615,
                'recordsStillToBeReviewedUnderLCI' => 5,
                'plannedTotalForYearEndTransfer' => 101,
                'awaitingDisposal' => 338,
                'awaitingDisposalUnderLCI' => 21237,
                'comments' => "Legacy comments re: A1, C2 and Fera"
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 3862,
                'recordsSelectedForTransfer' => 40,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 2943,
                'recordsStillToBeReviewedUnderLCI' => 119,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 760,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "See Legacy comments re: A1, C2 and Fera. Nil return declared within 'Records planned for transfer' as no decision has yet been made with TNA's Transfer Supervisor."
            )],

        [
            'name' => 'Department for International Development',
            'url' => 'https://www.gov.uk/government/organisations/department-for-international-development',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 15,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 12,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 3,
                'plannedTotalForYearEndTransfer' => 12,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Three records are awaiting further sensitivity review."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 4294,
                'recordsSelectedForTransfer' => 163,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 3282,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 688,
                'awaitingDisposal' => 849,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Estimated figure DFID operated on a three year file period during this time. Figures relate to records covering 1989-91."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 14000,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 14000,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 2100,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "DFID operated a three year file period during this time.  Figures relate to records covering 1992-94."
            )],

        [
            'name' => 'Department for Transport',
            'url' => 'https://www.gov.uk/government/organisations/department-for-transport',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 2730,
                'recordsSelectedForTransfer' => 73,
                'recordsSelectedForTransferUnderLCI' => 21,
                'recordsStillToBeReviewed' => 2630,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 46,
                'awaitingDisposal' => 6,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "The volume of legacy records reflects the combined holdings from the central department and four agencies: DVLA, DVSA, MCA and VCA. 1938 of the legacy records are from the Maritime and Coastguard Agency, where a programme of review and disposal continues as planned. A further 700 have been identified by DVLA as part of an exercise to audit and reconcile records listed incorrectly within other storage accounts. More accurate data will be provided once the reconciliation is complete, and work to review and dispose of them in line with the business need is now underway."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 9910,
                'recordsSelectedForTransfer' => 24,
                'recordsSelectedForTransferUnderLCI' => 4,
                'recordsStillToBeReviewed' => 1835,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 34,
                'awaitingDisposal' => 8047,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "The volume of in-year records reflects the combined holdings from the central department and four agencies: DVLA, DVSA, MCA and VCA. DVSA has recently identified a collection of 7956 former VOSA records awaiting disposal, and plans are in place to action these within the current year. A further 1197 records are from the Maritime and Coastguard Agency, where a programme of review and disposal continues as planned."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 2143,
                'recordsSelectedForTransfer' => 59,
                'recordsSelectedForTransferUnderLCI' => 4,
                'recordsStillToBeReviewed' => 2074,
                'recordsStillToBeReviewedUnderLCI' => 1,
                'plannedTotalForYearEndTransfer' => 95,
                'awaitingDisposal' => 5,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "The volume of next years’ records reflects the combined holdings from the central department and four agencies: DVLA, DVSA, MCA and VCA. The number of records planned for transfer is an estimate, that equates to those files already selected plus approx. 2% of those remaining for review."
            )],


        [
            'name' => 'Department for Work and Pensions',
            'url' => 'https://www.gov.uk/government/organisations/department-for-work-pensions',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 0,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "DWP holds no legacy files."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 18731,
                'recordsSelectedForTransfer' => 2540,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 2540,
                'awaitingDisposal' => 16191,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "This is the number of records planned for transfer to TNA by 31st December 2016."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 31250,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 20666,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 3000,
                'awaitingDisposal' => 10584,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "The total to transfer is not known at this stage. This figure is based on the percentage of the total that we usually transfer."
            )],

        [
            'name' => 'Department of Health',
            'url' => 'https://www.gov.uk/government/organisations/department-of-health',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 12570,
                'recordsSelectedForTransfer' => 268,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 8381,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 3921,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "268 records are prepared and will be checked by TNA during their visit in July 2016. Work is progressing on securing retention instrument for those records required by the IICSA."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 19866,
                'recordsSelectedForTransfer' => 382,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 19412,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 72,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "51 records are prepared and will be checked by TNA during their visit in July 2016. Work is progressing on securing retention instrument for those records required by the IICSA."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 22594,
                'recordsSelectedForTransfer' => 326,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 22219,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 49,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => ""
            )],

        [
            'name' => 'Foreign and Commonwealth Office',
            'url' => 'https://www.gov.uk/archive-records',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 171446,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 22016,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 141893,
                'plannedTotalForYearEndTransfer' => 16028,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 7537,
                'comments' => "This reflects annual departmental files. It excludes files in legacy series identified during an audit in 2014, which are currently being appraised. Approx 13% of files in these legacy series may fall within The National Archives' collection policy and may be listed as annual departmental files. These figures also exclude non-standard legacy files held by the FCO. See www.gov.uk/archive-records for more information on the FCO's total archive holdings and the record release programme, including the non-standard holdings. All FCO files overdue to review under the Public Records Act are held under a Retention Instrument."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 74316,
                'recordsSelectedForTransfer' => 2425,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 70866,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 1025,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "These files are not yet overdue for transfer and therefore are not subject to a Retention Instrument. 16028 files from 1984, 1985 and 1986 will transfer during this year."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 73802,
                'recordsSelectedForTransfer' => 825,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 72977,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Approx 18000 files from 1986, 1987 and 1988 will transfer during this period."
            )],

        [
            'name' => 'Health and Safety Executive',
            'url' => 'http://www.hse.gov.uk/foi/retention-schedule.htm',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 0,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => ""
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 15350,
                'recordsSelectedForTransfer' => 21,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 5371,
                'recordsStillToBeReviewedUnderLCI' => 357,
                'plannedTotalForYearEndTransfer' => 123,
                'awaitingDisposal' => 9601,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Records retained under LCI/RI no.'s 85 and 111. CRD files - RI applied for awaiting confirmation of the number. Records selected for transfer total includes CRD files but other fields do not as we have no access to their database to provide this information. Records planned for transfer are 123 CRD files which have not been included in overall total as this skews the stats for 2016."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 21834,
                'recordsSelectedForTransfer' => 682,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 21152,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Numbers can not be provided as these records have not been reviewed. Records retained covered by RI/LCI no 85. CRD files - RI applied for awaiting confirmation of the RI no."
            )],

        [
            'name' => 'HM Revenue and Customs',
            'url' => 'http://www.hmrc.gov.uk',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 409,
                'recordsSelectedForTransfer' => 96,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 285,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 96,
                'awaitingDisposal' => 28,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "HMRC continues to progress with the TNA agreed plan to prepare identified legacy records for transfer during 2016.  Legacy transfers will be complete in line with the 2017 transfer requirements at which point all currently identified files will be compliant to transfer timelines. HMRC is currently reviewing its Records Transfer Process with business areas to ensure Public Records Act compliance."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 2,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 2,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "HMRC continues to progress with the TNA agreed plan to prepare identified legacy records for transfer during 2016.  Legacy transfers will be complete in line with the 2017 transfer requirements at which point all currently identified files will be compliant to transfer timelines. HMRC is currently reviewing its Records Transfer Process with business areas to ensure Public Records Act compliance."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 493,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 493,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Transfers will be complete in line with the 2017 transfer requirements at which point all currently identified files will be compliant to transfer timelines. 489 files identified for potential 2017 transfer have yet to be reviewed and may subsequently not be suitable for transfer. HMRC is currently reviewing its Records Transfer Process with business areas to ensure Public Records Act compliance."
            )],

        [
            'name' => 'HM Treasury',
            'url' => 'https://www.gov.uk/government/organisations/hm-treasury',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 95970,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 30941,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 63559,
                'plannedTotalForYearEndTransfer' => 30941,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 1470,
                'comments' => "HM Treasury is running behind TNA’s 20-year Rule Transition Plan but we are systematically working through our legacy over the next few years under a plan agreed with the Advisory Council on National Records and Archives."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 46235,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 32584,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 13651,
                'comments' => "Because HM Treasury is running behind TNA’s 20-year Rule Transition Plan the transfer of files from 1989-90 will happen in 2017, not 2016. This approach has been agreed with the Advisory Council on National Records and Archives."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 36305,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 34680,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 1625,
                'comments' => "No Retention Instrument (RI) is required for any of these records at present as none are due for transfer until the end of December 2017. We anticipate that a new RI will be required to hold 1991-92 records in 2018 and we will seek one next year."
            )],

        [
            'name' => 'Home Office',
            'url' => 'https://www.gov.uk/government/organisations/home-office',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 12625,
                'recordsSelectedForTransfer' => 346,
                'recordsSelectedForTransferUnderLCI' => 3104,
                'recordsStillToBeReviewed' => 930,
                'recordsStillToBeReviewedUnderLCI' => 2026,
                'plannedTotalForYearEndTransfer' => 500,
                'awaitingDisposal' => 1094,
                'awaitingDisposalUnderLCI' => 5125,
                'comments' => "Home Office is prioritising work to reduce legacy files and anticipates more transfers this year than shown. This will be updated in the Autumn records transfer report."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 7350,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 7350,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Work on these files is temporarily halted whilst legacy files are addressed. Typically only 5-10% of surviving files are selected for transfer and Home Office anticipates that the majority of the files identified above will not be selected"
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 19209,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 19209,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Work on these files is temporarily halted whilst legacy files are addressed. Typically only 5-10% of surviving files are selected for transfer and Home Office anticipates that the majority of the files identified above will not be selected."
            )],

        [
            'name' => 'Ministry of Defence',
            'url' => 'https://www.gov.uk/government/publications/mods-records-transfer-report-and-explanation',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 501476,
                'recordsSelectedForTransfer' => 437250,
                'recordsSelectedForTransferUnderLCI' => 8000,
                'recordsStillToBeReviewed' => 9500,
                'recordsStillToBeReviewedUnderLCI' => 46000,
                'plannedTotalForYearEndTransfer' => 3652,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 726,
                'comments' => "Records at (A1) are predominantly Defence estate maps and plans, with those at (A2) being World War Two RAF casualty packs. Records at (B1) are predominantly service personnel records with a year of birth of pre-1902, a study is currently being conducted by the MOD to determine how best to transfer these to The National Archives.  Those at (B2) are also World War Two RAF casualty packs, but these have been reviewed and selected for transfer to TNA."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 34282,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 5000,
                'recordsStillToBeReviewed' => 2000,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 3239,
                'awaitingDisposal' => 27282,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "The records at A(1) are predominantly administrative registered files, whilst those records selected for transfer include Ships Logs and RAF Operational Record Books. The records awaiting disposal are mainly administrative registered files that the department would normally have destroyed but can’t due to the self-imposed preservation order on records that might be required for the Independent Inquiry into Child Sexual Abuse. All Ships Logs dated to 1995 will be transferred to TNA this year."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 62200,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 500,
                'recordsStillToBeReviewed' => 61700,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 0,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "(A1) shows the number of records in the MOD Main and Sensitive archives identified from this period. Records at (B2) are RAF Operational Record Books. The number of records to be transferred in this period, has yet to be agreed with TNA."
            )],

        [
            'name' => 'Ministry of Justice',
            'url' => 'http://www.justice.gov.uk',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 2313,
                'recordsSelectedForTransfer' => 2313,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 2313,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Due to the complex nature of the JCPC records, we continue to work alongside TNA and Harwell to make these records ready for transfer. The figure given above will be ready for transfer by the end of 2016."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 6146,
                'recordsSelectedForTransfer' => 378,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 5768,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 628,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "For records planned for transfer, estimated 250 to transfer out of the figure at A1 plus those already selected at B1."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 27015,
                'recordsSelectedForTransfer' => 45,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 26970,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 2742,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "For records planned for transfer, 10% estimate of figure at 1A plus those already selected for transfer at 1B."
            )],

        [
            'name' => 'Northern Ireland Office',
            'url' => 'https://www.gov.uk/government/organisations/northern-ireland-office',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 1249,
                'recordsSelectedForTransfer' => 818,
                'recordsSelectedForTransferUnderLCI' => 431,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 1249,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Review of all records complete, timing of transfer to TNA to be agreed."
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 2129,
                'recordsSelectedForTransfer' => 444,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 1685,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 1455,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "Transfer to TNA of selected files from 1990 likely to occur in early 2017."
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 3441,
                'recordsSelectedForTransfer' => 0,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 3441,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 2065,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => "These figures are estimates based on previous years destruction percentages."
            )],

        [
            'name' => 'Ordnance Survey',
            'url' => 'http://www.ordnancesurvey.co.uk/',
            'legacy' => array( // Legacy
                'totalRecordsHeld' => 1000,
                'recordsSelectedForTransfer' => 1000,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 1000,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => ""
            ),
            'current_year' => array( // Current year
                'totalRecordsHeld' => 500,
                'recordsSelectedForTransfer' => 500,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 500,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => ""
            ),
            'forecast' => array( // Forecast
                'totalRecordsHeld' => 200,
                'recordsSelectedForTransfer' => 200,
                'recordsSelectedForTransferUnderLCI' => 0,
                'recordsStillToBeReviewed' => 0,
                'recordsStillToBeReviewedUnderLCI' => 0,
                'plannedTotalForYearEndTransfer' => 200,
                'awaitingDisposal' => 0,
                'awaitingDisposalUnderLCI' => 0,
                'comments' => ""
            )]);
}