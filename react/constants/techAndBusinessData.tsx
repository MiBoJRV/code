import React from 'react';
import { TechAndBusinessType } from 'src/types';
import { EmphasizedText } from 'src/ui-kit';
import { CentricApproachIcon } from 'src/assets/icons/CentricApproachIcon';
import { TeamScalingIcon } from 'src/assets/icons/TeamScalingIcon';
import { TeamworkIcon } from 'src/assets/icons/TeamworkIcon';
import { UpdatesIcon } from 'src/assets/icons/UpdatesIcon';

export const TECH_AND_BUSINESS_DATA: TechAndBusinessType = {
  id: 'technology_business',
  title: 'Aligning technology and business',
  description:
    'To succeed in the tech industry, you need a CTO who understands the business side of things. And this is exactly what Wetelo offers with our CTO consulting services.',
  options: [
    {
      id: 'team_leadership',
      icon: <CentricApproachIcon />,
      title: 'Effective team leadership',
      description: (
        <>
          Our CTO has
          <EmphasizedText title=" led software development teams " />
          for more than
          <EmphasizedText title=" 10 years. " />
          He understands the technical, operational, and business aspects and
          can lead your team to deliver solutions
          <EmphasizedText title=" aligned with your business goals." />
        </>
      ),
    },
    {
      id: 'cost_savings',
      icon: <TeamScalingIcon />,
      title: 'Significant cost savings',
      description: (
        <>
          Our CTO as a service is an
          <EmphasizedText title=" ideal solution for startups that may not have the budget " />
          to hire a full-time technical leader. Our service allows you to
          address your technology challenges, so you can
          <EmphasizedText title=" focus on growing your business." />
        </>
      ),
    },
    {
      id: 'informed_decisions',
      icon: <UpdatesIcon />,
      title: 'Well-informed decisions',
      description: (
        <>
          As your technology partner, we can
          <EmphasizedText title=" help you make informed technology investments, " />
          avoid costly mistakes, and optimize spend to drive maximum value. With
          our guidance, you can
          <EmphasizedText title=" achieve your goals while staying within your budget." />
        </>
      ),
    },
    {
      id: 'collaboration',
      icon: <TeamworkIcon />,
      title: 'Adaptable collaboration',

      description: (
        <>
          We've got you covered with
          <EmphasizedText title=" flexible collaboration options " />
          that fit your project needs, whether you need a full-time CTO, a
          fractional CTO, a combo of both, or even an entire software
          development team to
          <EmphasizedText title=" work with you for an extended period of time." />
        </>
      ),
    },
  ],
};
