import { CtoOptionType } from 'src/types';
import { TextBracketRightIcon } from 'src/assets/icons/TextBracketRightIcon';
import { TextBracketLeftIcon } from 'src/assets/icons/TextBracketLeftIcon';
import { EmphasizedText, StrongText } from 'src/ui-kit';
import React from 'react';

export const CTO_OPTIONS_DATA: CtoOptionType = {
  id: 'opt_cto',
  title: (
    <>
      <span>Opt for a</span>
      <div className="relative px-5 lg:px-9">
        <TextBracketLeftIcon className="absolute top-1 left-2 h-12 lg:h-20 lg:left-4" />
        <StrongText
          className="whitespace-nowrap text-title-sm xs:text-h3-mob lg:text-h2"
          title="CTO as a service"
        />
        <TextBracketRightIcon className="absolute top-1 right-2 h-12 lg:h-20 lg:right-4" />
      </div>
      <span> if</span>
    </>
  ),
  options: [
    {
      id: 'about_technology',
      title: '01',
      description: (
        <>
          You have a natural talent for business, but you
          <EmphasizedText title=" don't know much about technology" />, and
          there's no one to help you out.
        </>
      ),
    },
    {
      id: 'fully_control',
      title: '02',
      description: (
        <>
          You are
          <EmphasizedText title=" in search of a specialist to fully control " />
          your software development process, from idea to launch.
        </>
      ),
    },
    {
      id: 'required_expertise',
      title: '03',
      description: (
        <>
          You
          <EmphasizedText title=" don't have the required expertise to make the move to SaaS" />
          , manage cloud systems, handle API integrations, or re-architect your
          app.
        </>
      ),
    },
    {
      id: 'search_resources',
      title: '04',
      description: (
        <>
          You need a permanent CTO, but
          <EmphasizedText title=" don't have the time and resources to search " />
          for one. In the meantime, there's no one to oversee the technology.
        </>
      ),
    },
  ],
};
