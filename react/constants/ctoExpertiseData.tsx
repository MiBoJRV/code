import { CtoExpertiseType } from 'src/types';
import { EmphasizedText } from '../ui-kit';

export const CTO_EXPERTISE_DATA: CtoExpertiseType = {
  id: 'cto_expertise',
  title: (
    <>
      Get the
      <EmphasizedText title=" CTO expertise " />
      you've always wished for
    </>
  ),
  description:
    'Our CTO seamlessly integrates into your product development team and provides solutions to your technology challenges.',
  features: [
    {
      id: 'performing_technology',
      text: (
        <>
          <EmphasizedText title="Performing technology " />
          and
          <EmphasizedText title=" security assessments " />
          and making sure you're ready for due diligence
        </>
      ),
    },
    {
      id: 'honest_opinion',
      text: (
        <>
          Giving you an
          <EmphasizedText title=" honest opinion " />
          on whether something
          <EmphasizedText title=" can be done" />
        </>
      ),
    },
    {
      id: 'minimizing_risks',
      text: (
        <>
          <EmphasizedText title="Minimizing risks " />
          involved with the specific domain and technology
        </>
      ),
    },
    {
      id: 'managing_team',
      text: (
        <>
          Keeping your software development on track by
          <EmphasizedText title=" managing your team " />
          and fine-tuning your processes
        </>
      ),
    },
    {
      id: 'hiring_developers',
      text: (
        <>
          <EmphasizedText title="Assisting you " />
          with
          <EmphasizedText title=" hiring developers " />
          by conducting interviews and verifying potential candidates
        </>
      ),
    },
  ],
  buttonText: 'Hire a CTO',
  buttonClassName: 'max-w-[174px] w-full justify-center',
};
